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

    public function store(Request $request)
    {
    	$request->validate([
    		'name' => 'required',
    		'image' => 'required|image|mimes:jpg,jpeg,png,gif',
    	]);
    	$image = $request->file('image');
    	$image_name = rand(). '.'.$image->getClientOriginalExtension();
		$image->move(public_path('images'),$image_name);

    	$formDate = array(
    		'name' => $request->name,
    		'image' => $image_name
    	);
    	Customer::create($formDate);
		// $customer= new Customer();
		// $customer->image = request('image');
		// $customer->name = request('name');
		// $customer->save();

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
            'name'   =>  'required',
            'image' => 'required'
          
        ]);
        
        $image_name = $request->hidden_image;
       	$image = $request->file('image');
    	$image_name = rand(). '.'.$image->getClientOriginalExtension();
		$image->move(public_path('images'),$image_name);

        $data= ['name'=> $request->name,
        		'image'=>$image_name


    	];
       	
        Customer::find($request->id)->update($data);
         return redirect('customer');
     }

	public function about()
	{
		return view('about');
	}
}
