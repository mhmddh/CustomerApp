<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Customer App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">CustomerApp</a>
    </div>
    <ul class="nav navbar-nav">
        
      <li ><a href="/logout">Logout</a></li>
      
    </ul>
  </div>
</nav>

<div class="container">

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>

<script>

$(document).ready(function(){
  

 $(document).on('click', '.home a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });

 function fetch_data(page)
 {
  $.ajax({
   url:"/home?page="+page,
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }
 
});
</script>

</html>