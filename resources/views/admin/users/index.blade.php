@extends('layouts.admin')

@section('content')
    
    <div class="form-group">
         <a href="{{ url('user/create') }}" class="btn btn-success"><span class="fa fa-plus"></span> New User</a>
    </div>

   

    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>

        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table width="100%" class="table table-striped  table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>First name</th>
                            <th>Middle name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Administrator</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->username}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->middle_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                          @if(in_array($user->is_admin, $selectedRole))
                           <input type="checkbox" disabled="disabled" name="is_admin"  value="{{ $user->is_admin }}" checked>
                          @else
                             <input type="checkbox" disabled="disabled" name="is_admin"  value="{{ Auth::user()->is_admin }}">
                          @endif
                        </td>
                        <td>
                            <a href="{{ url('user/edit/'. $user->id) }}" class="btn btn-warning"><span class="fa fa-edit"></span>Edit
                            </a>

                            <a class="btn btn-danger delete-button" data-toggle="modal" data-target="#myModal" data-action="{{ url('user/delete/'. $user->id) }}"><span class="fa fa-trash-o"></span>Delete</a>
                        </td>
                          
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete user</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the selected user ?</p>
      </div>
      <div class="modal-footer">
          <form method="get" id="delete-form">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary btn-conf">Confirm delete</button>
          </form>
        
      </div>
    </div>
  </div>
</div>



@endsection