@extends('web.file')
@section('content')

<!--  breadcrumb start  -->
<div class="breadcrumb-area blog-breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="breadcrumb-txt">
                    <span>Latest Blog</span>
                    <h1>FROM THE LATEST NEWS AND BLOG</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-overlay"></div>
</div>
<!--  breadcrumb end  -->


<!--    blog lists start   -->
<div class="news-section blog-grid-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="row">




                    @foreach($blog as $blog2)

                    <div class="col-md-6">
                        <div class="single-news wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s">
                            <img src="/image/{{$blog2->image}}" alt="">
                            <div class="news-txt">
                                <span class="date">{{$blog2->created_at}} - BY Admin</span>
                                <a href="blog/{{$blog2->id}}/view" class="title">
                                    <h3> {{$blog2->title}}...</h3>
                                </a>
                                <a class="readmore" href="blog/{{$blog2->id}}/view">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $blogs->links('vendor.pagination.bootstrap-4') }}

                <!-- <div class="row">
                    <div class="col-lg-12">
                        <nav class="pagination-nav">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
            </div>
            <!--    blog sidebar section start   -->
            <div class="col-xl-4 offset-xl-1 col-lg-4">
                <div class="sidebar">
                    <div class="blog-sidebar-widgets">
                        <div class="searchbar-form-section">
                            <form action="https://kreativdev.com/transpix/transpix/blogs.html">
                                <div class="searchbar">
                                    <input name="term" type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="blog-sidebar-widgets post-widget">
                        <div class="popular-posts-lists">

                            <h4>Popular Posts</h4>

                            @foreach($blogs as $blog1)

                            <div class="single-popular-post">
                                <div class="popular-post-img-wrapper">
                                    <img src="{{$blog1->image}}" alt="">
                                </div>
                                <div class="popular-post-txt">
                                    <h5 class="popular-post-title"><a href="blog/{{$blog1->id}}/view">{{$blog2->title}}</a></h5>
                                    <small class="time">{{$blog1->created_at}}</small>
                                </div>
                            </div>
                            @endforeach
                            {{ $blog->links('vendor.pagination.bootstrap-4') }}





                            <div class="blog-sidebar-widgets category-widget">
                                <div class="category-lists">
                                    <h4>Categories</h4>
                                    <ul>
                                        <li class="single-category"><a href="blogs.html">Cargo</a></li>
                                        <li class="single-category"><a href="blogs.html">Delivery service</a></li>
                                        <li class="single-category"><a href="blogs.html">Freight</a></li>
                                        <li class="single-category"><a href="blogs.html">Logistic</a></li>
                                        <li class="single-category"><a href="blogs.html">Shipping</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="subscribe-section">
                                <span>SUBSCRIBE</span>
                                <h3>SUBSCRIBE FOR NEWSLETTER</h3>
                                <form class="subscribe-form" action="https://kreativdev.com/transpix/transpix/blogs.html">
                                    <div class="form-element"><input type="email" placeholder="Email"></div>
                                    <div class="form-element"><button type="submit"><span>Subscribe</span></button></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!--    blog sidebar section end   -->
                </div>
            </div>
        </div>
        <!--    blog lists end   -->


        <!--   cta section start    -->
        <div class="cta-section cta-bg">
            <div class="container">
                <div class="cta-container">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <h2 class="mb-lg-0 text-center text-lg-left">Reach your destination 100% safe & secure</h2>
                        </div>
                        <div class="col-lg-3 text-center text-lg-right">
                            <a href="contact.html" class="boxed-btn"><span>Contact Us</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-overlay"></div>
        </div>
        <!--   cta section end    -->
        @endsection