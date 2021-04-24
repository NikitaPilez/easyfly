@extends('welcome')
@section('content')
    <section id="page-content">
        <div class="container">
            <div class="page-title">
                <h1>Blog Masonry - Three Columns</h1>
            </div>
            <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{asset('images/blog.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{asset('images/blog.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{asset('images/blog.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{asset('images/blog.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{asset('images/blog.jpg')}}">
                            </a>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <h2><a href="#">Standard post with a single image
                                </a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>
                            <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
