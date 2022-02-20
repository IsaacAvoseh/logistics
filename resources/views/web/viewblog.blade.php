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


<!--    blog details section start   -->
<div class="blog-details-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="blog-details">
                    <img class="blog-details-img-1" src="assets/img/blog_single/main.jpg" alt="">
                    <small class="date">November 05, 2018 - BY Admin</small>
                    <h2 class="blog-details-title"> {{$post['title']}}
                    </h2>
                    <div class="blog-details-body">

                    <!-- <img src="{{ $post['image'] }}" alt=""> -->
                        <p>
                            {{$post['content']}}
                        </p>
                    </div>
                </div>
                <div class="blog-share">
                    <ul>
                        <li><a href="#" class="facebook-share"><i class="fab fa-facebook-f"></i> Share</a></li>
                        <li><a href="#" class="twitter-share"><i class="fab fa-twitter"></i> Tweet</a></li>
                        <li><a href="#" class="pinterest-share"><i class="fab fa-pinterest-p"></i> Pinterest</a></li>
                    </ul>
                </div>
                <div class="author-info">
                    <div class="author-img-wrapper">
                        <img src="assets/img/blog_single/author.jpg" alt="">
                    </div>
                    <div class="author-details">
                        <h4 class="name">Shahriar Hossain</h4>
                        <p class="desc">Mauna Loa, the biggest volcano on Earth and one of the most active covers half the Island of
                            Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises
                            14,000 feet above sea level. To them it represents a spiritual.
                        </p>
                    </div>
                </div>
                <div class="comment-lists">
                    <h3>Comments (02)</h3>
                    <div class="single-comment">
                        <div class="single-comment-wrapper">
                            <img src="assets/img/blog_single/person-1.jpg" alt="">
                        </div>
                        <div class="person-info">
                            <div class="person-name">
                                <h5>Gerald Rishel</h5>
                            </div>
                            <div class="date">
                                <small>August 25, 2018</small>
                                <a href="#">Reply</a>
                            </div>
                            <div class="comment">
                                <p>Energistically optimize installed base channels after open-source sources. Continually
                                    repurpose team driven markets via long-term high-impact imperatives.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="single-comment">
                        <div class="single-comment-wrapper">
                            <img src="assets/img/blog_single/person-2.jpg" alt="">
                        </div>
                        <div class="person-info">
                            <div class="person-name">
                                <h5>Gerald Rishel</h5>
                            </div>
                            <div class="date">
                                <small>August 25, 2018</small>
                                <a href="#">Reply</a>
                            </div>
                            <div class="comment">
                                <p>Energistically optimize installed base channels after open-source sources. Continually
                                    repurpose team driven markets via long-term high-impact imperatives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reply-form-section">
                    <h3>Leave a Reply</h3>
                    <form action="https://kreativdev.com/transpix/transpix/blog-details.html">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-element"><input type="text" placeholder="Your Name"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-element"><input type="email" placeholder="Your Email"></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-element reduced-mb"><textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-element m-0"><button type="submit"><span>Post Comment</span></button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--    blog sidebar section start   -->
            <div class="col-xl-4 offset-xl-1 col-lg-4">
                <div class="sidebar">
                    <div class="blog-sidebar-widgets">
                        <div class="searchbar-form-section">
                            <form action="https://kreativdev.com/transpix/transpix/blogs.html">
                                <div class="searchbar">
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="blog-sidebar-widgets">
                        <div class="popular-posts-lists">
                            <h4>Popular Posts</h4>

                            @foreach($blogs as $blog1)

                            <div class="single-popular-post">
                                <div class="popular-post-img-wrapper">
                                    <img src="assets/img/blog/blog_sidebar_1.jpg" alt="">
                                </div>
                                <div class="popular-post-txt">
                                    <h5 class="popular-post-title"><a href="blog/{{$blog1->id}}/view">{{$blog1->title}}...</a></h5>
                                    <small class="time">{{$blog1->created_at}}</small>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="blog-sidebar-widgets">
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
                            <span>Subscribe</span>
                            <h3>Subscribe for Newsletter</h3>
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
    <!--    blog details section end   -->


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