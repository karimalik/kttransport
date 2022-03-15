@extends('layouts.app')

@section('title')
KT-Transport : Achat Piece
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
                    <li class="breadcrumb-item active">Achat Piece</li>
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
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Information sur l'achat du {{ $achat->dateAchat }}.</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="dateAchat" readonly value="{{ $achat->dateAchat }}">
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input class="form-control" type="text" name="designation" readonly value="{{ $achat->designation }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Quantite</label>
                                    <input class="form-control" type="text" name="quantite" readonly value="{{ $achat->quantite }}">
                                </div>
                                <div class="form-group">
                                    <label>Prix Unitaire</label>
                                    <input class="form-control" type="text" name="prixU" readonly value="{{ $achat->prixU}}">
                                </div>
                                <div class="form-group">
                                    <label>Montant Total</label>
                                    <input class="form-control" readonly value="{{ $achat->montantT}}">
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-success">Valider</button> &nbsp;&nbsp; -->
                            <a href="{{ route('achats.index') }}" class="btn btn-default">retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
@endsection