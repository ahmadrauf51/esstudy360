@extends('layout/master')
@section('title') Category @endsection
@section('content')
@include('partials/hero')
<div class="contrainer-fluid">
    @foreach($categories as $category)
    <div class="py-5 category">
        <div class="category-header mt-2 mb-3">
            <img src="{{asset('img/categories').'/'.$category->image_path}}" width="80" alt="">
            {{$category->name}}
        </div>
        <!--  Category items -->
        <div class="container-fluid">
            <div class="row">
                @foreach($category->subcategory as $subcategory)
                <div class="col-4 col-md-2">
                    <div class="category-item">
                        <a href="{{Route('subcategory', $subcategory->slug)}}">
                            <img src="{{asset('img/categories/sub').'/'.$subcategory->image_path}}" class="align-center" alt="">
                            <p class="text-center">{{$subcategory->title}}</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
