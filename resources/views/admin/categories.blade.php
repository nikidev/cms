@extends('layouts.admin')

@section('content')
    <a href="" class="btn btn-success">New Category</a>

    <div class="panel panel-default">
        <div class="panel-heading">
            Categories
        </div>

        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection