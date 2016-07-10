@extends('layouts.app')

@section('content')
    @include('includes.header-dashboard')
    {{--Navigation--}}
    <div class="dashboard-content" ng-controller="IndexController">
    <div class="col-md-2 nav-dashboard">
        <div class="row">
            <ul>
                <li><a href="#/articles"><i class="fa fa-newspaper-o"></i>Статьи</a></li>
                <li><a href="#/gallery"><i class="fa fa-picture-o"></i>Галерея</a></li>
            </ul>
        </div>
    </div>
    {{--Setting block--}}
        <div class="col-sm-10 col-md-10 setting-block">
    <div ng-view=""></div>
        </div>
    </div>
@endsection
