@extends('customers.layout')





@section('content')
<h3>Edit Customer Informations:</h3>
<form action="{{route('customers.update',$customer->id)}}" method="POST" role="form" enctype="multipart/form-data">
@csrf
@method('PUT')
    <input class="form-control" type="text" name="name" value="{{$customer->Name}}" placeholder="Name">
    
    <br/>

    <input class="form-control" type="text" name="email" value="{{$customer->Email}}" placeholder="Email">
<br/>
    <input class="form-control" type="text" name="address" value="{{$customer->Address}}" placeholder="Address">
    
    <br/>

    <input class="form-control" type="text" name="mobile" value="{{$customer->Mobile}}" placeholder="Mobile">
    
    <br/>
    <input class="form-control" type="text" name="passport" value="{{$customer->Passport}}" placeholder="Passport">
    
    <br/>
   
    <input type="file" name="file" accept="application/pdf"> 

    <br/>
    
    
    
    <a class="btn btn-warning btn-close" href="{{url('/viewcustomers')}}">Back</a>


    <button class="btn btn-primary" type="submit"> Submit</button>
</form>
@endsection