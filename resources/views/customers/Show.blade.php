
@extends('customers.layout')


@section('content')
<a class="btn btn-warning btn-close" href="{{url('/viewcustomers')}}">Go Back</a>

<h3>Customer Information</h3>
<div class="container">
<table class='table table-striped' aria-labelledby="tableLabel">
<tr>
<td>Customer ID:</td>
<td>{{$customer->id}}</td>
</tr>
<tr>
<td>Customer Name:</td>
<td>{{$customer->Name}}</td>
</tr>
<tr>
<td>Customer IEmail:</td>
<td>{{$customer->Email}}</td>
</tr>
<tr>
<td>Customer Address:</td>
<td>{{$customer->Address}}</td>
</tr>
<tr>
<td>Customer Passport:</td>
<td>{{$customer->Passport}}</td>
</tr>
</table>
</div>



<br/>


@endsection