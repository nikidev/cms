@extends('layouts.admin')

@section('content')
    
    <div class="form-group">
         <a href="{{ url('article/create') }}" class="btn btn-success"><span class="fa fa-plus"></span> New Article</a>
    </div>

   

    <div class="panel panel-default">
        <div class="panel-heading">
            Articles
        </div>

        <div class="panel-body">
            <div class="dataTable_wrapper">
                <table width="100%" class="table table-striped  table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>In category: </th>
                            <th>Created by:</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->title}}</td>
                        <td>
                          {{ $article->category->name }}
                        </td>
                        <td>{{ $article->user->username }}</td> 
                        <td>
                            <a href="{{ url('article/edit/'. $article->id) }}" class="btn btn-warning"><span class="fa fa-edit"></span>Edit
                            </a>

                            <a class="btn btn-danger delete-button" data-toggle="modal" data-target="#myModal" data-action="{{ url('article/delete/'. $article->id) }}"><span class="fa fa-trash-o"></span>Delete</a>
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
        <h4 class="modal-title" id="myModalLabel">Delete article</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the selected article ?</p>
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