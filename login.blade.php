<!DOCTYPE html>
<html lang="en">
<head>

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
  <!-- <h2>@include('flash::message')</h2> -->
<div class="container">
	<div class="row">
  <div class="col-md-4">
  		<div class="panel panel-default" style="margin-top:200px;">
  		<div class="panel-body">
			<form action="{{route('postLogin')}}" method="POST" >
			<input type="hidden" name="remember_token" value="{{ csrf_token() }}">
			<label>Email:</label>
			<input type="email" name="email"  class="form-control" value="" ></br>
			<label>Password:</label>
			<input type="password" name="password" id="inputPassword" class="form-control" required="required" title=""></br>
			<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	</div>
  </div>
  @if(Auth::check())
  <div class="col-md-4">
        <div class="panel panel-default" style="margin-top:200px;">
  		<div class="panel-body">

  		     <label>User List</label>
  		     @foreach($user as $user)
 			<p>{{$user->name}}</p>
  <p>{{$user->email}}</p>
 			@endforeach

</div>
</div>
  </div>
  @endif
</div>
</div>
<script type="text/javascript">


</script>

</body>
</html>