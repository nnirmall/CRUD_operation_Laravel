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
}
