@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
 
            @if(Session::has('flash_message'))
                <div class="alert alert-success col-sm-12" style="text-align:center;">
                    <em> {!! session('flash_message') !!}</em>
                </div>
            @endif
    
         <div style="text-align:center">
            <h3><span class="fa fa-user"></span> My profile</h3>
           
         </div>

    		 <form action="{{ url('profile/update/'.Auth::user()->id) }}" method="POST" class="form-horizontal">

                {{ method_field('PUT') }}
                {!! csrf_field() !!}

              

                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-sm-3 control-label">Username</label>

                    <div class="col-sm-6">
                        <input type="text" name="username" id="username" class="form-control" value="{{ Auth::user()->username }}">
                        @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

                

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-6">
                        <input type="text" name="email" id="email" class="form-control" value="{{ Auth::user()->email }}">
                        @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>



            

                

                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label for="first_name" class="col-sm-3 control-label">First name</label>

                    <div class="col-sm-6">
                        <input type="text" name="first_name" id="first_name" class="form-control" value="{{ Auth::user()->first_name }}">
                        @if ($errors->has('first_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('first_name') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('middle_name') ? ' has-error' : '' }}">
                    <label for="middle_name" class="col-sm-3 control-label">Middle name</label>

                    <div class="col-sm-6">
                        <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{ Auth::user()->middle_name }}">
                        @if ($errors->has('middle_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('middle_name') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label for="last_name" class="col-sm-3 control-label">Last name</label>

                    <div class="col-sm-6">
                        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ Auth::user()->last_name }}">
                        @if ($errors->has('last_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('last_name') }}</strong>
                                </span>
                        @endif
                    </div>
                </div>

               
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-4">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-edit"></i> Update Profile
                        </button>

                         <a href="{{ url('/dashboard') }}" class="btn btn-danger"><span class="fa fa-chevron-right"></span>Back
                         </a>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection