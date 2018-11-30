@extends('layout/master')
@section('title') Post @endsection
@section('nav-class') navbar-rev @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($subcategories as $subcategory)
        <div class="col-xs-12 col-md-2 pt-md-3 pl-0">
            @include('partials/sidebar')
        </div>
        <div class="col-xs-12 col-md-8">
            <div class="page pt-md-5">
                <div class="hero text-center pt-5">
                    <img src="{{asset('img/categories/sub/').'/'.$subcategory->image_path}}" alt="">
                    {{$subcategory->title}}
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <a class="btn btn-primary" href="#Previous" role="button">Previous</a>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-primary float-md-right" href="#Next" role="button">Next</a>
                </div>
            </div>
            <div class="page-content pt-4">
                <div class="content">
                    {!! $subcategory->default_page !!}
                    <!-- pagination -->
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="#Previous" role="button">Previous</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary float-md-right" href="#Next" role="button">Next</a>
                        </div>
                    </div>
                    <!-- pagination -->
                </div>
            </div>
            <div class="ad mt-4">
                <img src="{{asset('img/banner/4.bild.jpg')}}" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-md-2 border pt-md-3 mt-md-5">
            <div class="ads-bar">
                <img src="{{asset('img/banner/bnr.jpg')}}" class="mb-3" width="100%" alt="">
                <img src="{{asset('img/banner/html.png')}}" class="mb-3" width="100%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam amet, sit maxime nesciunt eveniet similique, ex quam harum repellendus illum.</p>
                <a href="#" class="btn btn-primary">Click Here</a>
            </div>
        </div>
        @endforeach
    </div>


</div>


@endsection
