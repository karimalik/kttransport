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
                <h4>Nouvelle achat de piece.</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="{{ route('achats.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="dateAchat" required>
                                </div>
                                <div class="form-group">
                                    <label>Designation</label>
                                    <input class="form-control" type="text" name="designation" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Quantite</label>
                                    <input class="form-control" type="text" name="quantite" required>
                                </div>
                                <div class="form-group">
                                    <label>Prix Unitaire</label>
                                    <input class="form-control" type="text" name="prixU" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Valider</button> &nbsp;&nbsp;
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