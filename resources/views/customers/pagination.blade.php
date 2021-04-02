@extends('customers.layout')


@section('content')

<div class="container">
<a href="{{url('/create')}}">Add new Customer</a> &nbsp;

<a href="{{route('customers.index')}}">Go Back</a> &nbsp;


@csrf

<div id="table_data">

<div class="table-responsive">

<table class='table table-hover' aria-labelledby="tableLabel">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Mobile</th>

    <th>Passport #</th>
    <th>CV</th>

    <th>Action</th>
</tr>
</thead>
    <tbody>

@foreach ($customers as $customer)
<tr>
<td>{{$customer->id}}</td>
<td>{{$customer->Name}}</td>
<td>{{$customer->Email}}</td>
<td>{{$customer->Address}}</td>
<td>{{$customer->Mobile}}</td>
<td>{{$customer->Passport}}</td>

<td>

<a  href="{{route('downloadfile',$customer->CVurl)}}" download class="btn btn-primary">Download</a>

</td>

<form action="{{route('customers.destroy',$customer->id)}}" method="POST">

<td>
<a  href="{{route('customers.show',$customer->id)}}" class="btn btn-info">Show</a>

<a  href="{{route('customers.edit',$customer->id)}}" class="btn btn-primary">Edit</a>
@csrf
@method('DELETE')
<button type="submit"class="btn btn-danger">Delete</button> 

</form>
</td>
</tr>
@endforeach
</tbody>

</table> 
{{ $customers->links() }}
Page #{{$i}}


</div>


</div>



    
</div>



    
@endsection

