@extends('customers.layout')





@section('content')
<h3>Add new Customer:</h3>
<form action="{{route('customers.store')}}" method="POST" role="form" enctype="multipart/form-data">
@csrf
    <input class="form-control" type="text" name="name" placeholder="Name">
    
    <br/>

    <input class="form-control" type="text" name="email" placeholder="Email">
<br/>
    <input class="form-control" type="text" name="address" placeholder="Address">
    
    <br/>

    <input class="form-control" type="text" name="mobile" placeholder="Mobile">
    
    <br/>
    <input class="form-control" type="text" name="passport" placeholder="Passport">
    
    <br/>
   

    <input type="file" name="file" accept="application/pdf">

    <br/>
    
    
    
    <a class="btn btn-warning btn-close" href="{{route('customers.index')}}">Cancel</a>


    <button class="btn btn-primary" type="submit"> Submit</button>
</form>
@endsection