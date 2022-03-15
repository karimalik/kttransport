<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KT-Transport : Resultat recherche</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="{{ asset('theme/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-secondary">

    <div class="unix-invoice">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div id="invoice" class="effect2 m-t-120">
                        <div id="invoice-top">
                            <div class="invoice-logo"></div>
                            <!-- <div class="invoice-info">
                                <h2>john doe</h2>
                                <p> hello@Admin Board.com <br> +8801629599859
                                </p>
                            </div> -->
                            <!--End Info-->
                            <div class="title">
                                <h4>KT-Transport & Service</h4>
                                <p>
                                    Adresse: Akwa, face snack le blue<br>
                                    Telephone: (237) 690 012 789 <br>
                                    Site Web: www.kttransport.com
                                </p>
                            </div>
                            <!--End Title-->
                        </div>
                        <!--End InvoiceTop-->



                        <div id="invoice-mid">

                            <div class="clientlogo"></div>
                            <!-- <div class="invoice-info">
                                <h2>Client Name</h2>
                                <p>mariam@gmail.com<br> 555-555-5555
                                    <br>
                            </div> -->

                            <div id="project">
                                <h3>Listing Consommation de carburant</h3>
                                <!-- <p>Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel purus. Curabitur semper malesuada urna ut suscipit.</p> -->
                            </div>

                        </div>
                        <!--End Invoice Mid-->

                        <div id="invoice-bot">
                            <div id="invoice-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr class="tabletitle bg-primary">
                                            <!-- <td class="text-center text-sub">
                                                <h2>ID</h2>
                                            </td> -->
                                            <td class="text-center text-sub">
                                                <h2>Date</h2>
                                            </td>
                                            <td class="text-center text-sub">
                                                <h2>Quantite</h2>
                                            </td>
                                            <td class="text-center text-sub">
                                                <h2>Montant</h2>
                                            </td>
                                            <td class="text-center Rate">
                                                <h2>Periode</h2>
                                            </td>
                                            <td class="text-center text-sub">
                                                <h2>Marque</h2>
                                            </td>
                                            <!-- <td class="text-center text-sub">
                                                <h2>Commentaire</h2>
                                            </td> -->
                                        </tr>

                                        @foreach ($results as $result)
                                        <tr class="service">
                                            <td class="tableitem">
                                                <p class="itemtext text-center">{{ $result->date }}</p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext text-center">{{ $result->quantite }}</p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext text-center">{{ $result->montant }}</p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext text-center">{{ $result->periode }}</p>
                                            </td>
                                            <td class="tableitem">
                                                <p class="itemtext text-center">{{ $result->marque }}</p>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <tr class="tabletitle">
                                            <td></td>
                                            <td></td>
                                            <td class="Rate">
                                                <h2> Montant Total</h2>
                                            </td>
                                            <td class="payment">
                                                <h2>{{ $sommeT }}</h2>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <!--End Table-->

                            <div id="legalcopy">
                                <p class="legal"><strong>KT-Transport & Service</strong>
                                </p>
                            </div>
                        </div>
                        <!--End InvoiceBot-->
                        <button type="button" class="btn btn-secondary" onClick="window.print()">Imprimer</button>
                    </div>
                    <!--End Invoice-->
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>