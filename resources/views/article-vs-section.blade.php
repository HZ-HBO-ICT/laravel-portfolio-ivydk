<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" href="/img/id-logo-2.png">
</head>

<body>
    <header>
        <a href="/index.html"><img src="/img/id-logo-2.png" class="header-logo" alt="id-logo">IVY DEKKER</a>
    </header>
    <nav class="nav-bar">
        <ul>
            <li><a href="/index.html">Home</a></li>
            <li><a href="/profile.html">Profile</a></li>
            <li><a href="/dashboard.html">Dashboard</a></li>
            <li><a href="/faq.html">FAQ</a></li>
            <li><a href="/blog.html" class="active">Blog</a></li>
        </ul>
    </nav>
    <main>

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
    </main>
    <aside class="nav-bar">
        <ul>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf"
                    target="_blank">Onderwijs-& examenregeling</a></li>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
                    target="_blank">Uitvoeringsregeling</a></li>
            <li><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                    target="blank">Teams</a></li>
            <li><a href="https://learn.hz.nl/my/" target="blank">HZ learn</a></li>
            <li><a href="https://portal.hz.nl/" target="blank">HZ portal</a></li>
            <li><a href="https://www.w3schools.com/" target="blank">W3 Schools</a></li>
            <li><a href="https://github.com/" target="blank">GitHub</a></li>
            <li><a href="https://outlook.office.com/mail/inbox" target="blank">E-mail</a></li>
        </ul>
    </aside>
    <footer class="footer-display">
        <a class="a-color" href="https://hz.nl/" target="blank"> <img src="/img/hz-logo.png" height="60px"
                alt="hz-logo"></a>
        <div class="link-footer">Ivy Dekker<a href="mailto:dekk0123@hz.nl"><br>dekk0123@hz.nl</a> </div>
    </footer>
</body>

</html>