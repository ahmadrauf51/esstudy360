<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-content pt-md-5">
        <div class="sidebar-header">{{$subcategory->title}} Tutroial</div>
        <div class="sidebar-nav">
            <ul class="list-unstyled">
                @foreach($subcategory->posts as $post)
                <li>
                    <a href="{{$post->slug}}">{{$post->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
