@extends('layouts.masterLayout')

@section('title', 'Article vs Section')

@section('content')
        <article class="link">
            <h2>&ltarticle&gt vs &ltsection&gt</h2>
            <p>
            <dl>
                <dt><a href="https://www.smashingmagazine.com/2020/01/html5-article-section/" target="_blank">Artikel
                        1</a>
                    van Smashing Magazine</dt>
                <dt><a href="https://stackoverflow.com/questions/7549561/section-vs-article-html5"
                        target="_blank">Artikel 2</a> van Stack Overflow</dt>
                <dt><a href="https://www.geeksforgeeks.org/difference-between-article-tag-and-section-tag/"
                        target="_blank">Artikel 3</a> van Geeks for Geeks</dt>
            </dl>
            </p>


            <p>Ik ben het eens met de conclusie van <a
                    href="https://www.geeksforgeeks.org/difference-between-article-tag-and-section-tag/"
                    target="_blank">Geeks for Geeks</a>.
                Dit houdt in dat je een &ltarticle&gt tag kan gebruiken als je informatie wilt plaatsen op jouw site
                en je kan een alleen een article in een article zetten als het met elklaar te maken heeft. Een
                &ltsection&gt
                tag gebruik je als een stuk text in een blokje wilt zetten.
                Je kan dit gebruiken om sections en subsections te maken. </p>
        </article>

        <div id="img-blog-posts"> <img src="/img/article-vs-section.jpg" height="300px"></div>

        <input type="button" value="Terug" onclick="history.back()" class="terug-knop">

@endsection

