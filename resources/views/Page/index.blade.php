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
            <div class="page-content pt-5">
                <h1>Introduction To Angular Js 4</h1>
                <p>AngularJS is a very powerful JavaScript Framework. It is used in Single Page Application (SPA) projects. It extends HTML DOM with additional attributes and makes it more responsive to user actions. AngularJS is open source, completely free, and used by thousands of developers around the world. It is licensed under the Apache license version 2.0.</p>
                <h1>Audience</h1>
                <p>This tutorial is designed for software professionals who want to learn the basics of AngularJS and its programming concepts in simple and easy steps. It describes the components of AngularJS with suitable examples.</p>
                <h1>Prerequisites</h1>
                <p>You should have a basic understanding of JavaScript and any text editor. As we are going to develop web-based applications using AngularJS, it will be good if you have an understanding of other web technologies such as HTML, CSS, AJAX, etc.</p>
                <div class="row">
                    <div class="col-md-6">
                        <a class="btn btn-primary" href="#Previous" role="button">Previous</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-primary float-md-right" href="#Next" role="button">Next</a>
                    </div>
                </div>
            </div>
            <div class="ad mt-4">
                <img src="{{asset('img/banner/4.bild.jpg')}}" alt="">
            </div>
        </div>
        <div class="col-xs-12 col-md-2 border">
            <div class="pt-md-3 mt-md-5">
                <img src="{{asset('img/banner/bnr.jpg')}}" class="mb-3" width="100%" alt="">
                <img src="{{asset('img/banner/html.png')}}" class="mb-3" width="100%" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam amet, sit maxime nesciunt eveniet similique, ex quam harum repellendus illum.</p>
                <a href="#" class="btn btn-primary">Click Here</a>
            </div>
        </div>
    </div>


</div>


@endsection
