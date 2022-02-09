@extends('layouts.masterLayout')

@section('title', 'Blog')

@section('content')
    <h2>Blog posts</h2>

    <div class="blog-posts" id="box-container">

        <div class="container-item">
            <a href="blog/feedback-pitch-sept">
                <div class="card">
                    <img src="/img/index.png" class="card-img" alt="schema-article-section-div">
                    <h2>Feedback pitch september</h2>
                </div>
            </a>
        </div>

        <div class="container-item">
            <a href="blog/interessanteBedrijven">
                <div class="card">
                    <img src="/img/weave.jpg" class="card-img" alt="schema-article-section-div">
                    <h2>Interessante bedrijven</h2>
                </div>
            </a>
        </div>

        <div class="container-item">
            <a href="blog/bedrijfssafari">
                <div class="card">
                    <img src="/img/bedrijfssafari.jpg" class="card-img" alt="damen-naval">
                    <h2>Bedrijfssafari</h2>
                </div>
            </a>
        </div>

        <div class="container-item">
            <a href="blog/studiekeuze">
                <div class="card">
                    <img src="/img/hz-gebouw.jpg" class="card-img" alt="hz-groenewouod">
                    <h2>Studiekeuze</h2>
                </div>
            </a>
        </div>

        <div class="container-item">
            <a href="blog/swot-analyse">
                <div class="card">
                    <img src="/img/swot.jpg" class="card-img" alt="swot">
                    <h2>SWOT analyse</h2>
                </div>
            </a>
        </div>

        <div class="container-item">
            <a href="blog/programmeerervaring">
                <div class="card">
                    <img src="/img/code.png" class="card-img" alt="code-website">
                    <h2>Programmeerervaring</h2>
                </div>
            </a>
        </div>

        <div class="container-item">
            <a href="blog/eerste-feedback">
                <div class="card">
                    <img src="/img/feedback.png" class="card-img" alt="feedback">
                    <h2>Eerste feedback</h2>
                </div>
            </a>
        </div>


        <div class="container-item">
            <a href="blog/article-vs-section">
                <div class="card">
                    <img src="/img/article-vs-section.jpg" class="card-img" alt="schema-article-section-div">
                    <h2>&ltarticle&gt vs &ltselection&gt</h2>
                </div>
            </a>
        </div>

    </div>
@endsection
