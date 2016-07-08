@extends('layouts.admin')


@section('content')

	 <form action="{{ url('article/store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <label for="title" class="col-sm-3 control-label">Title</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                    @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                <label for="body" class="col-sm-3 control-label">Body</label>

                <div class="col-sm-6">
                    <textarea  name="body" id="body" class="form-control" value="{{ old('body') }}"></textarea>
                    @if ($errors->has('body'))
                            <span class="help-block">
                                <strong>{{ $errors->first('body') }}</strong>
                            </span>
                    @endif
                </div>
            </div>


             <div class="form-group">
                <label for="category" class="col-sm-3 control-label">Add in category: </label>

                <div class="col-sm-2">
                    <select name="category" class="form-control">
                        <option value=""></option>
                        @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

                          
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-4">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Article
                    </button>

                     <a href="{{ url('/articles') }}" class="btn btn-danger">
                     	<span class="fa fa-chevron-right"></span>Back
                     </a>
                </div>
            </div>

        </form>

@endsection()