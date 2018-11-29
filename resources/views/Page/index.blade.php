@extends('layout/master')
@section('title') Beginner Guide For Programming @endsection
@section('nav-class') navbar-rev @endsection
@section('content')

<div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-md-2 pt-md-3 pl-0">
          @include('partials/sidebar')
        </div>
        <div class="col-xs-12 col-md-8">
            <div class="page pt-md-5">
                <div class="hero text-center pt-5">
                    <img src="{{asset('img/categories/sub/angularjs4.png')}}" alt=""> Angular Js 4
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-2">
            <div class="pt-md-3 mt-md-5 text-center">
                <h4 class="text-center">Ads Here</h4>
                <img src="{{asset('img/banner/html.png')}}" class="img-thumbnail" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam amet, sit maxime nesciunt eveniet similique, ex quam harum repellendus illum.</p>
                <a href="#" class="btn btn-primary">Click Here</a>
            </div>
        </div>
      </div>


</div>


@endsection
