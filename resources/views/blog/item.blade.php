@extends('welcome')
@section('content')
    <section id="page-title" class="page-title-center text-light" style="background-size:cover; background-position:center; background-image:url({{ Voyager::image( $article->image ) }});">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="page-title">
                <span class="post-meta-category"><a href="">{{ $article->title }}</a></span>
                <h1>{{ $article->excerpt }}</h1>
                <div class="small m-b-20">{{ $article-> created_at }} | <a href="#">by admin</a> | <a href="#">5 Likes</a></div>
            </div>
        </div>
    </section>

    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div id="blog" class="single-post col-lg-10 center">
                <div class="post-item">
                    <div class="post-item-wrap">
                        <div class="post-item-description">
                            {!! $article->body !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
