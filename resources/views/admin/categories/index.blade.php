@extends('layouts.admin')

@section('content')
    
    <div class="form-group">
         <a href="{{ url('category/create') }}" class="btn btn-success"><span class="fa fa-plus"></span> New Category</a>
    </div>

   

    <div class="panel panel-default" style="width:50%; float:left;">
        <div class="panel-heading">
            Categories
        </div>

        <div class="panel-body" >
            <div class="dataTable_wrapper">


            <table   class="table table-striped  table-responsive table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Categories</th>
                             <th>Children categories</th>
                            <th>Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td id={{ $category->id }}>{{$category->name}}</td>
                        <td>
                          @foreach($category->children as $child)
                            {{ $child->name }}
                          @endforeach
                        </td>
                        <td>
                            <a href="{{ url('category/edit/'. $category->id) }}" class="btn btn-warning"><span class="fa fa-edit"></span>Edit
                            </a>

                            <a class="btn btn-danger delete-button" data-toggle="modal" data-target="#myModal" data-action="{{ url('category/delete/'. $category->id) }}"><span class="fa fa-trash-o"></span>Delete</a>
                        </td>
                          
                    </tr>
                    @endforeach
                    </tbody>
                </table>

               
            </div>
        </div>
    </div>

  <div class="panel panel-default" style="width:47%; float:right;">
        <div class="panel-heading">
            Categories  <p style="float:right;"><i class="fa fa-arrows" aria-hidden="true"></i> Drag and Drop to reorder</p>
        </div>
    <div class="panel-body">
            <div class="dataTable_wrapper">
               <ul id="category-sort">
                  @foreach ($categories as $category)
                     <li id={{ $category->id }}><i class="fa fa-arrows-v" aria-hidden="true"></i>  {{ $category->name }} </li>
                  @endforeach
                </ul>
            </div>
      </div>
  </div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Delete category</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the selected category ?</p>
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