<!-- Nav Start -->
<div class="classynav">
    <ul>
        <li><a href="{{route('blog.index')}}">Home</a></li> <!--index.html-->
        <li><a href="#">Pages</a>
            <ul class="dropdown">
                <li><a href="{{route('blog.index')}}">Home</a></li>
                <li><a href="{{route('blog.archive-blog')}}">Archive Blog</a></li>
                <li><a href="{{route('blog.single-post')}}">Single Post</a></li>
                <li><a href="{{route('blog.about-us')}}">About</a></li>
                <li><a href="{{route('blog.contact')}}">Contact</a></li>
                <li><a href="typography.html">Typography</a></li>
            </ul>
        </li>
        <li><a href="{{route('blog.categories')}}">Catagories</a>
            <div class="dropdown">
                <ul class="single-mega cn-col-12">

                @foreach($categories_key as $category)
                <li><a href="#">{{$category->name}}</a></li>
                {{-- <li><a href="{{route('blog.categories-'.$category->slug)}}">{{$category->name}}</a></li> --}}
                @endforeach
                                
                </ul>
            </div>
        </li>
        {{-- <li><a href="#">Travel</a></li> --}}
        <li><a href="/about-us">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="{{route('admin.login.get')}}">Login</a></li>
    </ul>

</div>
<!-- Nav End -->