<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('postRegister')}}">Signup</a></li>
          <li><a href="{{route('postLogin')}}">Login</a></li>
            @if(Auth::check())
          <li><a href="{{route('logout')}}">LogOut</a></li>
          @endif
                  </ul>
      </li>

    </ul>
  </div>
</nav>
@if(Session::has('flash_message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
@endif
<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
  <!-- <h2>@include('flash::message')</h2> -->``
 <div class="container">
 <div class="row">
<div class="col-xs-4 col-sm-4">
 <h2>Register Page</h2>
    <div class="panel panel-default" style="margin-top:50px;">
  <div class="panel-body">
 	<form id="signup" class="ajax">
			<input type="hidden" name="remember_token" value="{{ csrf_token() }}">

			<label>Name:</label>
			<input type="text" name="name"  class="form-control" title=""></br>

			<label>Email:</label>
			<input type="email" name="email"  class="form-control" value="" ></br>

			<label>Password:</label>
			<input type="password" name="password"  class="form-control"  title=""></br>

			<button type="submit" class="btn btn-primary">Submit</button>
	</form>

 </div>
</div>
 	</div>
 </div>
 </div>


<script type="text/javascript" src="{{asset('public/jquery-1.11.3.js')}}"></script>
<script>
     $(document).ready(function() {
        // Ajax for our form
        $('form.ajax').on('submit', function(event){
            event.preventDefault();
            // var formData = {
            //     name     : $('input[name=name]').val(),
            //     email    : $('input[name=email]').val(),
            //     password : $('input[name=password]').val(),
            // }
            // alert($('input[name=name]').val());
            $.ajax({
                type     : "POST",
                url      : "{{route('postRegister')}}",
                data     : $(this).serialize(),/* send the form data to route*/
                cache    : false,
                success  : function(res) {
                    console.log(res);
                    if(res == '1')
                    {
                    	$('.alert em').text('successfully registred');
                    }
                    else
                    {
                    	alert('not registred');
                    }
                }
            });
            return false;
        });
    });
    </script>
    </body>
</html>