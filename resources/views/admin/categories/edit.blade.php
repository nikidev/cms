@extends('layouts.admin')

@section('content')

 <form action="{{ url('category/update/'. $mainCategory->id) }}" method="POST" class="form-horizontal">

            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-3 control-label">Category name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" value="<?php echo (isset($mainCategory->name) ? $mainCategory->name :  ''); ?>" id="name"  class="form-control">

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
                        @if($mainCategory->parent_id == 0)
                                <option  selected="true" value="0">-- no parent</option>
                       @endif

                        @if($mainCategory->parent_id > 0)
                                <option  value="0">-- no parent</option>
                        @endif

                        @foreach($parentCategories as $parentCategory)
                            @if($parentCategory->id == $mainCategory->parent_id)
                                <option selected="true" value="{{ $parentCategory->parent_id }}">{{ $parentCategory->name }}</option>
                            @else
                                <option  value="{{ $parentCategory->id }}">{{ $parentCategory->name }}</option>
                            @endif
                        @endforeach
                        
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