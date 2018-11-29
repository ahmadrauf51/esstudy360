@extends('layout/master')
@section('title') Beginner Guide For Programming @endsection
@section('content')
@include('partials/hero')
<div class="contrainer-fluid">
    <div class="py-5 category">
        <div class="category-header mt-5 mb-3">
            <img src="public/img/categories/coding.png" width="80" alt="">
            Web Development
        </div>
        <!--  Category items -->
        <div class="row">
            @for($j=1;$j<=12;$j++)
            <div class="col-md-3">
                <div class="category-item">
                    <a href="#">
                        <img src="public/img/categories/sub/angularjs4.png" class="align-center" alt="">
                        <p class="text-center">Angular 4 Js</p>
                    </a>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
