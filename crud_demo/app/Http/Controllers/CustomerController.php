<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Storage;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers.list', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $customer = new  Customer();
//        $customer->name = $request->input('name');
//        $customer->dob  = $request->input('dob');
//        $customer->email = $request->input('email');
        $customer->fill($request->all());

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path  = $image->store('images', 'public');
            $customer->image = $path;
        }

        $customer->save();

        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request  $request , $id)
    {
        $customer = Customer::findOrFail($id);
//        $customer->name  = $request->input('name');
//        $customer->dob   = $request->input('dob');
//        $customer->email = $request->input('email');
        $customer->fill($request->all());
        if ($request->hasFile('image')) {
            $currentImg = $customer->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }

            $image = $request->file('image');
            $path  = $image->store('images', 'public');
            $customer->image = $path;
        }

        $customer->save();

        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index');
    }

}
