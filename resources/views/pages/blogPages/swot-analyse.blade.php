@extends('layouts.masterLayout')

@section('title', 'Blog')

@section('content')
        <article>
            <h2>SWOT Analyse</h2>


            <table id="swot-table">
                <tr>
                    <td id="strenghts">
                        <h3>Strenghts</h3>
                        <ul>
                            <li>Creatief</li>
                            <li>Samenwerken</li>
                            <li>Doorzetter</li>
                        </ul>
                    </td>
                    <td id="weaknesses">
                        <h3>Weaknesses</h3>
                        <ul>
                            <li>Chaotisch</li>
                            <li>Eigenwijs</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td id="opportunities">
                        <h3>Opportunities</h3>
                        <ul>
                            <li>atieve oplossingen bedenken</li>
                            <li>Goed is teams werken </li>
                            <li>Doorzetten als het even vast loopt </li>
                        </ul>
                    </td>
                    <td id="threats">
                        <h3>Threats</h3>
                        <ul>
                            <li> Soms is mijn idee lastig uit te leggen </li>
                            <li>Graag eerst zelf iets proberen </li>
                        </ul>
                    </td>
                </tr>
            </table>

        </article>

        <input type="button" value="Terug" onclick="history.back()" class="terug-knop">
@endsection
