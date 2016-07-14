@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{Auth::user()->count()}}</div>
                            <div>Users</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-wpforms fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $categories->count() }}</div>
                            <div>Categories</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ $articles->count() }}</div>
                            <div>Articles</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-lg-offset-4">
        <div class="panel panel-red">
            <div class="panel-heading">
                Quick likns
            </div>
            <div class="panel-body">
                <p>
                 <a href="{{ url('article/create') }}"><span class="fa fa-plus"></span> New Article</a>
                </p>
                <p>
                 <a href="{{ url('category/create') }}"><span class="fa fa-plus"></span> New Category</a>
                </p>
            </div>
        </div>
    </div>

   



    {{--END OF ROW FOR THE CARDS--}}
@endsection

@section('scripts')
@endsection