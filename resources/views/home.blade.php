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
                    <div class="stat-digit"> {{ $depenseCarburant }} CFA</div>
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
                    <div class="stat-digit"> {{ $depenseAchat }} CFA</div>
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
                    <div class="stat-digit"> {{ $depensePanne }} CFA</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-truck color-danger border-danger"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Tracteurs</div>
                    <div class="stat-digit">{{ $tracteur }}</div>
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
                            @foreach ($results as $result)
                            <tr>
                                <td>{{ $result->date }}</td>
                                <td>{{ $result->quantite }} Litre</td>
                                <td>{{ $result->montant }} CFA</td>
                                <td>{{ $result->kilometre }} Km</td>
                                <td>{{ $result->marque }}</td>
                                <td>{{ $result->periode }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    &nbsp; &nbsp; <a href="{{ route('carburants.index')}}" class="btn btn-info btn-flat btn-addon m-b-10 m-l-5"><i class="ti-eye"></i>Voir Plus</a>
    <!-- /# column -->
</div>
<!-- /# row -->
@endsection