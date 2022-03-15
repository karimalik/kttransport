@extends('layouts.app')

@section('title')
KT-Transport : Carburant
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
                    <li class="breadcrumb-item active">Carburant</li>
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
                <h4>Ajout d'une nouvelle consommation.</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="{{ route('carburants.update', $carburant->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" required value="{{ $carburant->date }}">
                                </div>
                                <div class="form-group">
                                    <label>quantite</label>
                                    <input class="form-control" type="text" name="quantite" required value="{{ $carburant->quantite }}">
                                </div>
                                <div class="form-group">
                                    <label>Tracteur</label>
                                    <select class="form-control" name="tracteur_id" required>
                                        <option value="{{$carburant->tracteur->id}}">{{ $carburant->tracteur->marque }}</option>
                                        @foreach ($tracteurs as $tracteur)
                                        <option value="{{ $tracteur->id }}"> {{ $tracteur->marque }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Montant</label>
                                    <input class="form-control" type="text" readonly value="{{ $carburant->montant }} CFA">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Kilometre</label>
                                    <input class="form-control" type="text" name="kilometre" required value="{{ $carburant->kilometre }}">
                                </div>
                                <div class="form-group">
                                    <label>Periode</label>
                                    <select class="form-control" name="periode" required>
                                        <option value="{{ $carburant->periode }}">{{ $carburant->periode }}</option>
                                        <option value="matin">Matin</option>
                                        <option value="soir">Soir</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Commentaire</label>
                                    <textarea class="form-control" rows="10" name="commentaire">{{ $carburant->commentaire }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Valider</button> &nbsp;&nbsp;
                            <a href="{{ route('carburants.index') }}" class="btn btn-default">retour</a>
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