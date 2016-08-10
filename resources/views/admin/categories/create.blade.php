@extends('layouts.admin')


@section('content')

	 <form action="{{ url('category/store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-sm-3 control-label">Category name</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
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
                        <option value="0">-- no parent</option>
                        @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                          
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-4">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Category
                    </button>

                     <a href="{{ url('/categories') }}" class="btn btn-danger">
                     	<span class="fa fa-chevron-right"></span>Back
                     </a>
                </div>
            </div>

        </form>

@endsection