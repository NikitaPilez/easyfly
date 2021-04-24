@extends('welcome')
@section('content')
<div id="slider" class="inspiro-slider slider-fullscreen dots-creative" data-height-xs="360">
    <!-- Slide 1 -->
    <div class="slide kenburns" style="background-image:url({{asset('/images/parallax.jpg')}});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <span class="strong">W
                            ITH POLO TEMPLATE</span>
                <h2 class="text-dark">Create Your <br>Awesome Website With Ease</h2>
            </div>
        </div>
    </div>
    <div class="slide kenburns" style="background-image:url({{asset('/images/parallax.jpg')}});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <span class="strong">WITH POLO TEMPLATE</span>
                <h2 class="text-dark">Explore The <br>New World of Creativity</h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="heading-text heading-section text-center">
            <h2>What we do</h2>
            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box effect medium border center">
                    <h3>Powerful template</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box effect medium border center">
                    <h3>Flexible Layouts</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box effect medium border center">
                    <h3>Retina Ready</h3>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="call-to-action background-image p-t-100 p-b-100" style="background-image:url({{asset('images/parallax.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <h3 class="text-light">Join by April 27 and <span>Win $200</span> in Programs and Services</h3>
                <p class="text-light">This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p>
            </div>
            <div class="col-lg-2"> <a class="btn btn-light btn-outline">Call us now!</a> </div>
        </div>
    </div>
</div>

<section id="page-content" class="sidebar-right">
    <div class="container">
        <div class="row">
            <div class="content col-lg-12">
                <div id="blog" class="post-thumbnails">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('/images/blog.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('/images/blog.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('/images/blog.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{asset('/images/blog.jpg')}}">
                                </a>
                                <span class="post-meta-category"><a href="">Lifestyle</a></span>
                            </div>
                            <div class="post-item-description">
                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                <h2><a href="#">Standard post with a single image
                                    </a></h2>
                                <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                                <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; 2019 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="//www.inspiro-media.com" target="_blank" rel="noopener"> INSPIRO</a> </div>
        </div>
    </div>
</footer>
@endsection
