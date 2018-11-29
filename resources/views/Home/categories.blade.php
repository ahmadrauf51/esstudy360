<div class="categories py-md-5">
    <h1 class="text-center my-md-5">Browse All Categories</h1>
    <div class="container-fluid">
        <div class="row">
            @foreach($categories as $category)
            <div class="col-xs-12 col-md-6">
                <div class="categories-box">
                    <div class="categories-header">
                        <img src="{{asset('img/categories').'/'.$category->image_path}}" class="pr-2" width="50" alt="">
                        {{$category->name}}
                    </div>
                    <div class="categories-body">
                        <!-- Four columns: 25% width-->
                        <div class="row no-gutters">
                            @foreach($category->subcategory as $subcategory)
                            <div class="col-4 col-md-2">
                                <div class="d-flex justify-content-center categories-item">
                                    <a href="/###">
                                        <img src="{{asset('img/categories/sub').'/'.$subcategory->image_path}}" width="80" alt="">
                                        <p>{{$subcategory->title}}</p>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div> <!--  row -->
                        <p class="pb-1 mx-3 text-right text-muted view-all"><a href="{{str_slug($category->name).'/'.$category->id}}">View all</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
