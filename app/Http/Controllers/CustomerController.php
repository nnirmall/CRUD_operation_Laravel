<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller

{
    public function list()
    {
		$customer=Customer::all();
		return view('customer',['customer'=> $customer,
		]);

    }

    public function store()
    {
		$customer= new Customer();
		$customer->name = request('name');
		$customer->save();

		return back();
    }

    public function edit($id)
    {
  		$customer = Customer::find($id);
		return view('editcustomer',compact('customer'));
	}

	public function deleteUser(Request $request, $id)
	{
		$customer = Customer::find($id);

		$customer->delete();
		return redirect('customer');
		
	}

	public function update(Request $request) {
		// dd($request->all());
	 	$request->validate([
            'name'   =>  'required'
          
        ]);
        $data= ['name'=> $request->name];
       	
        Customer::find($request->id)->update($data);

         return redirect('customer');
     }

	public function about()
	{
		return view('about');
	}
}
