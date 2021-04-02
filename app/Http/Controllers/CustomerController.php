<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function viewcustomers(){

        $customers =  Customer::paginate(10);
        return view('customers.pagination',compact('customers'))
        ->with('i',(request()->input('page',1))*1);
    }

    public function index(){
        $customers =  Customer::all();
        return view('customers.index',compact('customers'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

   

    public function create(){

            return view('customers.create'); 
        
        
    }

    public function store(Request $request){
    
        $customer = new Customer();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'passport' => 'required',
            'file' => 'required'
        ]);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->mobile = $request->mobile;
        $customer->passport = $request->passport;
        $customer->CVurl = 'C:\CustomerProject\storage\app\public\CV'.$customer->name;
        $request->file->store('public');
        $customer->save();

        return redirect()->route('customers.index')
        ->with('success','Customer created successfully.');    
    }

    public function show(Customer $customer){
        return view('customers.show',compact('customer'));

    }

    public function edit(Customer $customer){
        return view('customers.edit',compact('customer'));

    }

    public function update(Request $request ,Customer $customer){
        $customers =  Customer::paginate(10);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'passport' => 'required',
            'file' => 'required'
        ]);
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->mobile = $request->mobile;
        $customer->passport = $request->passport;
        $customer->CVurl = 'C:\CustomerProject\storage\app\public\CV'.$customer->name;
        $request->file->store('public');
        $customer->update();
      return view('customers.pagination',compact('customers'))
      ->with('i',(request()->input('page',1)-1)*5);    
    }

    public function destroy(Customer $customer){
        $customers =  Customer::paginate(10);
$customer->delete();
return view('customers.pagination',compact('customers'))
        ->with('i',(request()->input('page',1)-1)*5);
    }



   

}
