@extends('layout/master')
@section('title') Beginner Guide For Programming @endsection
@section('content')
@include('partials/hero')
<div class="contrainer-fluid">
    <div class="py-5 category">
        <div class="category-header mt-2 mb-3">
            <img src="{{asset('img/categories/coding.png')}}" width="80" alt="">
            Web Development
        </div>
        <!--  Category items -->
        <div class="container-fluid">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-4 col-md-2">
                    <div class="category-item">
                        <a href="#">
                            <img src="{{asset('img/categories/sub').'/'.$category->image_path}}" class="align-center" alt="">
                            <p class="text-center">{{$category->title}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
