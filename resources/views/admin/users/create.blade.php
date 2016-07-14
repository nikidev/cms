@extends('layouts.admin')


@section('content')

	 <form action="{{ url('user/store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="col-sm-3 control-label">Username</label>

                <div class="col-sm-6">
                    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
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
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                     @endif
                </div>
            </div>

            
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-sm-3 control-label">Password</label>

                <div class="col-sm-6">
                    <input type="password" name="password" id="password" class="form-control">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-sm-3 control-label">First name</label>

                <div class="col-sm-6">
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}">
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
                    <input type="text" name="middle_name" id="middle_name" class="form-control" value="{{ old('middle_name') }}">
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
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="form-group">
                    <label for="group" class="col-sm-3 control-label">Choose admin role to be:</label>

                    <div class="col-sm-6">
                        <input type="checkbox" name="is_admin"  value="{{ Auth::user()->is_admin }}">
                    </div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-4">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add User
                    </button>

                     <a href="{{ url('/users') }}" class="btn btn-danger"><span class="fa fa-chevron-right"></span>Back
                     </a>
                </div>
            </div>

        </form>

@endsection()