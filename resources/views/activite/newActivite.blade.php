@extends('layouts.app')

@section('title')
KT-Transport :  Activite
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
                <h4>Ajouter une nouvelle activite.</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="{{ route('activites.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label>Site Chargement</label>
                                    <input class="form-control" type="text" name="siteChargement" required>
                                </div>
                                <div class="form-group">
                                    <label>Heure Chargement</label>
                                    <input class="form-control" type="time" name="heureChargement" required>
                                </div>
                                <div class="form-group">
                                    <label>Tracteur</label>
                                    <select class="form-control" name="tracteur_id" required>
                                        <option selected>Choix...</option>
                                        @foreach ($tracteurs as $tracteur)
                                        <option value="{{ $tracteur->id }}"> {{ $tracteur->marque }} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>20 Pieds</label>
                                    <select class="form-control" name="pieds20" required>
                                        <option selected>Choix...</option>
                                        <option value="vide">Vide</option>
                                        <option value="plein">Plein</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>40 Pieds</label>
                                    <select class="form-control" name="pieds40" required>
                                        <option selected>Choix...</option>
                                        <option value="vide">Vide</option>
                                        <option value="plein">Plein</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Site Dechargement</label>
                                    <input class="form-control" type="text" name="siteDechargement" required>
                                </div>
                                <div class="form-group">
                                    <label>Heure Dechargement</label>
                                    <input class="form-control" type="time" name="heureDechargement" required>
                                </div>
                                <div class="form-group">
                                    <label>Chauffeur</label>
                                    <select class="form-control" name="chauffeur_id" required>
                                        <option selected>Choix...</option>
                                        @foreach ($chauffeurs as $chauffeur)
                                        <option value="{{ $chauffeur->id }}">{{ $chauffeur->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Commentaire</label>
                                    <textarea class="form-control" rows="10" name="commentaire"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Numero Conteneur</label>
                                    <input class="form-control" type="text" name="numero_conteneur" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Valider</button> &nbsp;&nbsp;
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