<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="/img/id-logo-2.png">
</head>

<body>
    <header>
        <a href="/"><img src="/img/id-logo-2.png" class="header-logo" alt="id-logo">IVY DEKKER</a>
    </header>

    @include('includes.nav')


    <main>
        <article>
            <h2>Toetsen</h2>

            <div id="container-dashboard">
                <div id="dashboard-item-1">
                    <div class="dash-table">
                        <table width="800px">
                            <tr>
                                <th>Quartile</th>
                                <th>Course</th>
                                <th>EC</th>
                                <th>Exam</th>
                                <th>Status</th>
                                <th>Grade</th>
                                <th>Behaalde EC</th>
                            </tr>
                            <!-- kwartaal 1-->
                            <tr>
                                <td rowspan="3"><b>1</b></td>
                                <td>Programme and career oriantation</td>
                                <td>2.5</td>
                                <td>Assesment exam</td>
                                <td class="bezig"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Computer science basics</td>
                                <td>5.0</td>
                                <td>Written exam</td>
                                <td class="bezig"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Programming basics</td>
                                <td>5.0</td>
                                <td>Case study exam</td>
                                <td class="bezig"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <!-- kwartaal 2-->
                            <tr>
                                <td rowspan="2"><b>2</b></td>
                                <td rowspan="2">Object oriented programming</td>
                                <td rowspan="2">10.0</td>
                                <td>Case study</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Project</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <!-- kwartaal 3-->
                            <tr>
                                <td rowspan="4"><b>3</b></td>
                                <td>Framework development 1</td>
                                <td>5.0</td>
                                <td>Case study</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td rowspan="3">Framework project 1</td>
                                <td rowspan="3">7.5</td>
                                <td>Project</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Assesment</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Report</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <!-- kwartaal 4-->
                            <tr>
                                <td rowspan="3"><b>4</b></td>
                                <td rowspan="3">Framework project 2</td>
                                <td rowspan="3">10.0</td>
                                <td>Portfolio</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Project</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Assesment</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <!-- Entrire year, 12.5 EC Portfolio ; personality 1 en 2 beide 1.25 EC en Portfolio -->
                            <tr>
                                <td rowspan="3"><b>Whole year</b></td>
                                <td>Personality</td>
                                <td>12.5</td>
                                <td>Portfolio</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Personality 1</td>
                                <td>1.25</td>
                                <td>Portfolio</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>
                            <tr>
                                <td>Personality 2</td>
                                <td>1.25</td>
                                <td>Portfolio</td>
                                <td class="niet-begonnen"></td>
                                <td>...</td>
                                <!--Cijfer-->
                                <td>...</td>
                                <!--Behaalde EC-->
                            </tr>

                            <!--totaal-->
                            <tr>
                                <td><b>Totaal</b></td>
                                <td></td>
                                <td></td>
                                <td>60</td>
                                <td></td>
                                <td></td>
                                <td>0/60</td>
                            </tr>
                        </table>
                        <p><b> Behaalde studiepunten:</b> 0/60 <progress value="0" max="60" /> </p>
                    </div>

                    <div id="dashboard-item-2">
                        <table class="table-dash-2">
                            <tr>
                                <th>Kleur</th>
                                <th>Betekenis</th>
                            </tr>
                            <tr>
                                <td class="niet-begonnen"></td>
                                <td>Nog niet aan begonnen</td>
                            </tr>
                            <tr>
                                <td class="bezig"></td>
                                <td>Nu aan bezig</td>
                            </tr>

                            <tr>
                                <td class="onvoldoende-herkansen"></td>
                                <td>Onvoldoende -&gt herkansen</td>
                            </tr>
                            <tr>
                                <td class="afgerond"></td>
                                <td>Afgerond</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>


            <h2>BSA</h2>
            <p>Eerstejaars moeten verplicht een aantal punten halen om door te mogen naar het tweede studiejaar. Haal je dat niet dan krijg je een negatief ‘bindend studieadvies’ (bsa) en moet je stoppen met je opleiding. Behaal je minder dan 45EC in het
                eerste jaar dan krijg je een NBSA (Negatief Bindend Studie Advies) dit houdt in dat je niet door mag met de studie, tenzij jij hier een goede rede voor hebt dan is er een optie dat je een tweede kans krijgt. Als je een NBSA hebt gekregen
                mag je wel bij een andere studie beginnen. </p>

        </article>
    </main>
    <aside class="nav-bar">
        <ul>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf" target="_blank">Onderwijs-& examenregeling</a></li>
            <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf" target="_blank">Uitvoeringsregeling</a></li>
            <li><a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="blank">Teams</a></li>
            <li><a href="https://learn.hz.nl/my/" target="blank">HZ learn</a></li>
            <li><a href="https://portal.hz.nl/" target="blank">HZ portal</a></li>
            <li><a href="https://www.w3schools.com/" target="blank">W3 Schools</a></li>
            <li><a href="https://github.com/" target="blank">GitHub</a></li>
            <li><a href="https://outlook.office.com/mail/inbox" target="blank">E-mail</a></li>
        </ul>
    </aside>
    <footer class="footer-display">
        <a class="a-color" href="https://hz.nl/" target="blank"> <img src="img/hz-logo.png" height="60px" alt="hz-logo"></a>
        <div class="link-footer">Ivy Dekker
            <a href="mailto:dekk0123@hz.nl"><br>dekk0123@hz.nl</a>
        </div>
    </footer>
</body>

</html>
