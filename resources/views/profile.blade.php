<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My profile</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="/img/id-logo-2.png">
</head>

<body>
  <header>
    <a href="/index.html"><img src="/img/id-logo-2.png" class="header-logo" alt="id-logo">IVY DEKKER</a>
  </header>

  <nav class="nav-bar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="profile.blade.php" class="active">Profile</a></li>
      <li><a href="dashboard.blade.php">Dashboard</a></li>
      <li><a href="faq.blade.php">FAQ</a></li>
      <li><a href="blog.blade.php">Blog</a></li>
    </ul>
  </nav>


  <main>
    <article>

      <div id="wrapper-profile">
        <div id="profile-item-1">
          <h2>Personal information</h2>
          <p>
          <table class="no-backgr" style="width:max-content;">
            <tr>
              <td>Naam:</td>
              <td>Ivy Dekker</td>
            </tr>
            <tr>
              <td>Leeftijd:</td>
              <td>18 jaar (25/10/2002)</td>
            </tr>
            <tr>
              <td>Woonplaats + woonsituatie:</td>
              <td>Nieuw & St. Joosland, bij ouders</td>
            </tr>
            <tr>
              <td>Vooropleiding(en) + profiel:</td>
              <td>HAVO, NT (met informatica en o&o)</td>
            </tr>
          </table>
          </p>

        </div>

        <div id="map profile-item-2">
          <h2>Woonplaats</h2><iframe width="650" height="125"
            src="https://maps.google.com/maps?width=300&amp;height=200&amp;hl=en&amp;q=veerstraat%205%2C%20nieuw%20en%20sint%20joosland%2C%20nederland+(Titel)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <div
            style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
            <small style="line-height: 1.8;font-size: 2px;background: #fff;"></small></div>
          <style>
            #gmap_canvas img {
              max-width: none !important;
              background: none !important
            }
          </style>
        </div>
      </div>

      <div id="container-profile-2">
        <div id="profile-item-3">
          <h2>Karakteristieken</h2>

          <ul>
            <li>Behulpzaam</li>
            <li>Bezig</li>
            <li>Creatief</li>
            <li>Druk </li>
            <li>Eerlijk</li>
            <li>Enthousiast</li>
            <li>Nieuwgierig </li>
            <li>Slordig </li>
          </ul>
        </div>

        <div id="profile-item-4">
          <h2>Extra-curricular activities</h2>
          <p class="link">Ik heb mijn eigen bedrijfje <a href="https://ivycustoms.nl/" target="_blank">Ivy Customs</a>
            waar
            ik schoenen
            customize daarnaast werk ik bij een schoonmaakbedrijf.
            Naast het customizen boks ik graag, dit doe ik in Vlissingen bij <a href="https://www.bcdos.nl/"
              target="_blank">DOS</a>. Ook vind ik het leuk om te tekenen
            zo heb ik laatst een <a href="https://opensea.io/collection/lady-apples" target="_blank">NFT colletie</a>
            begonnen.
          </p>
        </div>
      </div>



      <div class="img-center">
        <div><img src="/img/boks-wedstrijd.jpg" height="175px" alt="boks-webstrijd"></div>
        <div><img src="/img/met-cal-yaar.jpg" height="175px" alt="met-calvin-yara"></div>
        <div><img src="/img/codf-shoen.jpg" height="175px" alt="city-of-dance-aj1m"></div>
        <div><img src="/img/diploma.jpg" height="175px" alt="voor-diploma-uitrijking"></div>
        <div><img src="/img/am1.jpg" height="175px" alt=""></div>
        <div><img src="/img/trein.jpg" height="175px" alt="met-as-adam"></div>
      </div>

    </article>
  </main>

  <aside class="nav-bar">
    <ul>
      <li><a
          href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf"
          target="_blank">Onderwijs-& examenregeling</a></li>
      <li><a
          href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
          target="_blank">Uitvoeringsregeling</a></li>
      <li><a
          href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
          target="blank">Teams</a></li>
      <li><a href="https://learn.hz.nl/my/" target="blank">HZ learn</a></li>
      <li><a href="https://portal.hz.nl/" target="blank">HZ portal</a></li>
      <li><a href="https://www.w3schools.com/" target="blank">W3 Schools</a></li>
      <li><a href="https://github.com/" target="blank">GitHub</a></li>
      <li><a href="https://outlook.office.com/mail/inbox" target="blank">E-mail</a></li>
    </ul>
  </aside>

  <footer class="footer-display">
    <a class="a-color" href="https://hz.nl/" target="blank"> <img src="img/hz-logo.png" height="60px" alt="hz-logo"></a>
    <div class="link-footer">Ivy Dekker<a href="mailto:dekk0123@hz.nl"><br>dekk0123@hz.nl</a> </div>
  </footer>
</body>

</html>
