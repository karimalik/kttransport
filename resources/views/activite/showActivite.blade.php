@extends('layouts.app')

@section('title')
KT-Transport : Activite
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
                    <li class="breadcrumb-item active">Activite</li>
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
                <h4>Informations sur l'activite du {{ $activite->date }} .</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" readonly value="{{$activite->date}}">
                                </div>
                                <div class="form-group">
                                    <label>Site Chargement</label>
                                    <input class="form-control" type="text" name="siteChargement" readonly value="{{$activite->siteChargement}}">
                                </div>
                                <div class="form-group">
                                    <label>Heure Chargement</label>
                                    <input class="form-control" type="time" name="heureChargement" readonly value="{{$activite->heureChargement}}">
                                </div>
                                <div class="form-group">
                                    <label>Tracteur</label>
                                    <input class="form-control" type="time" readonly value="{{$activite->tracteur->marque}}">
                                </div>
                                <div class="form-group">
                                    <label>20 Pieds</label>
                                    <input class="form-control" type="time" readonly value="{{$activite->pieds20}}">
                                </div>
                                <div class="form-group">
                                    <label>40 Pieds</label>
                                    <input class="form-control" type="time" readonly value="{{$activite->pieds20}}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Site Dechargement</label>
                                    <input class="form-control" type="text" name="siteDechargement" readonly value="{{$activite->siteDechargement}}">
                                </div>
                                <div class="form-group">
                                    <label>Heure Dechargement</label>
                                    <input class="form-control" type="time" name="heureDechargement" readonly value="{{$activite->heureDechargement}}">
                                </div>
                                <div class="form-group">
                                    <label>Chauffeur</label>
                                    <input class="form-control" type="time" readonly value="{{$activite->chauffeur->nom}}">
                                </div>
                                <div class="form-group">
                                    <label>Commentaire</label>
                                    <textarea class="form-control" rows="10" name="commentaire" readonly>{{$activite->commentaire}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Numero Conteneur</label>
                                    <input class="form-control" type="text" name="numero_conteneur" readonly value="{{$activite->numero_conteneur}}">
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-success">Valider</button> &nbsp;&nbsp; -->
                            <a href="{{ route('activites.index') }}" class="btn btn-default">retour</a>
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