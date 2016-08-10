@extends('layouts.admin')

@section('content')

 <form action="{{ url('category/update/'. $mcategory->id) }}" method="POST" class="form-horizontal">

            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-3 control-label">Category name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" value="<?php echo (isset($mcategory->name) ? $mcategory->name :  ''); ?>" id="name"  class="form-control">

                    @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                    @endif

                </div>
            </div>

            

            <div class="form-group">
                <label for="category" class="col-sm-3 control-label">Parent category: </label>

                <div class="col-sm-6">
                    <select name="parent" class="form-control">
                        @if($mcategory->parent_id == 0)
                                <option value="0">-- no parent</option>
                        @else
                            @foreach($categories as $category)
                                @if($category->id == $mcategory->parent_id)
                                    <option selected="true" value="{{ $category->parent_id }}">{{ $category->name }}</option>
                                @else
                                    <option  value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>


           
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-edit"></i> Edit category
                    </button>

                    <a href="{{ url('/categories') }}" class="btn btn-danger"><span class="fa fa-chevron-right"></span>Back
                     </a>
                </div>
            </div>

            
        </form>

@endsection