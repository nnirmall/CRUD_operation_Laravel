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
    	// $data = request()->validate([
    	// 	'name'=> 'required|min:3'
    
    	// ]);

		$customer= new Customer();
		$customer->name = request('name');
		$customer->save();

		return back();
    }

    public function edit()
    {
  		// $customer = Customer::find($id);
  		// $customer->update($requ->all());
		return view('editcustomer');
	}



	public function deleteUser($id)
	{
		$customer = Customer::find($id);

		$customer->delete();
		return redirect('customer');
		
	}

	 public function update() {

    
          $customer->update($request->all());

          return redirect('customer');
     }
}
