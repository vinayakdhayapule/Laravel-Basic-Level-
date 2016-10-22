@extends('layouts.app')

@section('content')
{{ $success = Session::get('success') }}
@if($success)
    <div class="alert-box success">
        <h2>{{ $success }}</h2>
    </div>
@endif
    <div class="container">
        <div class="col-sm-6 col-sm-6">
            @include('flash::message')
                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- New Task Form -->
                    <form action="{{route('doregister')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">First name</label>
                            <div class="col-sm-6">
                            <input type="text" name="firstname" id="task-name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Last name</label>
                            <div class="col-sm-6">
                            <input type="text" name="lastname" id="task-name" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                            <input type="text" name="meta_desc" id="task-name" class="form-control" value="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-6">
                        <input type="password" name="password" id="task-name" class="form-control" value="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Assign Role</label>
                            <div class="col-sm-6">
                                    <select  name="role_name" class="form-control" id="sel1">
                                    @foreach($role as $role)
                                      <option value="{{$role->name}}">{{$role->name}}</option>
                                       @endforeach
                                      </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" class="form-control">
                            </div>
                        </div>
                        <!-- Add Task Button -->
                        <!-- <div class="form-group"> -->
                            <div class="col-sm-offset-3 col-sm-3">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>submit
                                </button>
                            </div>
                        <!-- </div> -->
                    </form>
                </div>
                </div>
        </div>
    </div>
@endsection
