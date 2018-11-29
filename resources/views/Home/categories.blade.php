<div class="categories py-md-5">
    <h1 class="text-center my-md-5">Browse All Categories</h1>
    <div class="container-fluid">
        <div class="row">
            @for($i=1; $i<=4; $i++)
            <div class="col-xs-12 col-md-6">
                <div class="categories-box">
                    <div class="categories-header">
                        <img src="public/img/categories/coding.png" class="pr-2" width="50" alt="">
                        Web Development
                    </div>
                    <div class="categories-body">
                        <!-- Four columns: 25% width-->
                        <div class="row no-gutters">
                            @for($k=1; $k<=6; $k++)
                            <div class="col-4 col-md-2">
                                <div class="d-flex justify-content-center categories-item">
                                    <a href="#asdas">
                                        <img src="public/img/categories/sub/html-5.png" width="80" alt="">
                                        <p>HTML</p>
                                    </a>
                                </div>
                            </div>
                            @endfor
                        </div> <!--  row -->
                        <p class="pb-1 mx-3 text-right text-muted view-all"><a href="/web-development">View all</a></p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
