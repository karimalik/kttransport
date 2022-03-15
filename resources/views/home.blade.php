@extends('layouts.app')

@section('title')
KT-Transport : Dashboard
@endsection

@section('extra-css')
    <link href="{{ asset('theme/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
@endsection

@section('page-header')
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Hello, <span>Welcome Here&nbsp;<strong>{{ Auth::user()->name }}</strong> </span></h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Home</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">Depense Carburants</div>
                    <div class="stat-digit">1,012 CFA</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-shopping-cart-full color-primary border-primary"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">Depense Achat Piece</div>
                    <div class="stat-digit">961 CFA</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-settings color-pink border-pink"></i>
                </div>
                <div class="stat-content dib">
                    <div class="stat-text">Depense Panne</div>
                    <div class="stat-digit">770 CFA</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user color-danger border-danger"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Chauffeurs</div>
                    <div class="stat-digit">781</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title pr">
                <h4> <i class="ti-view-list color-info border-info"></i> Liste Carburants</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table student-data-table m-t-20">
                        <thead>
                            <tr>
                                <th><label><input type="checkbox" value=""></label>ID</th>
                                <th>Date</th>
                                <th>Quantite</th>
                                <th>Montant</th>
                                <th>Kilometre</th>
                                <th>Maraque</th>
                                <th>Periode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Class Test</td>
                                <td>Mathmatics</td>
                                <td>
                                    4.00
                                </td>
                                <td>
                                    95.00
                                </td>
                                <td>
                                    100
                                </td>
                                <td>20/04/2017</td>
                                <td>20/04/2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
@endsection