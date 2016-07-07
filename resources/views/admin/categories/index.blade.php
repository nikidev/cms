@extends('layouts.admin')

@section('content')
    
    <div class="form-group">
         <a href="{{ url('category/create') }}" class="btn btn-success"><span class="fa fa-plus"></span> New Category</a>
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
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>
                            <a href="" class="btn btn-warning"><span class="fa fa-edit"></span>Edit
                            </a>

                            <a class="btn btn-danger delete-button" data-toggle="modal" data-target="#myModal" data-action=""><span class="fa fa-trash-o"></span>Delete</a>
                        </td>
                        
                            
                        
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection