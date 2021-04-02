@extends('customers.ajaxscript')


@section('content')

<div class="container">
<a href="{{url('/create')}}">Add new Customer</a> &nbsp;

<a href="{{url('/viewcustomers')}}">View All Customers</a> &nbsp;


@csrf
<div class="container box">
   <h3 align="center">Live search for Customers</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Search Customer Data</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
        <th> ID</th>
         <th> Name</th>
         <th>Email</th>
         <th>Address</th>
         <th>Mobile</th>
         <th>Passport</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>


    
</div>



    
@endsection

