@extends('layouts.app')

@section('title')
KT-Transport : Chauffeurs
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
                    <li class="breadcrumb-item active">Chauffeurs</li>
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
                <h4>Modification des infos du chauffeurs {{ $chauffeur->nom }}.</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="{{ route('chauffeurs.update', $chauffeur->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="nom" placeholder="Dupont" required value="{{ $chauffeur->nom }}">
                                </div>
                                <div class="form-group">
                                    <label>Prenom</label>
                                    <input class="form-control" type="text" placeholder="albert" name="prenom" required value="{{ $chauffeur->prenom }}">
                                </div>
                                <div class="form-group">
                                    <label>Tracteur</label>
                                    <select class="form-control" name="tracteur_id" required>
                                        <option value="{{ $chauffeur->tracteur->id }}"> {{ $chauffeur->tracteur->marque }} </option>
                                        @foreach ($tracteurs as $tracteur)
                                        <option value="{{ $tracteur->id }}"> {{ $tracteur->marque }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Numero CNI</label>
                                    <input class="form-control" type="text" placeholder="78954" name="numeroCNI" required value="{{ $chauffeur->numeroCNI }}">
                                </div>
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input class="form-control" type="text" placeholder="655897415" name="telephone" required value="{{ $chauffeur->telephone }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info">Valider</button> &nbsp;&nbsp;
                            <a href="{{ route('chauffeurs.index') }}" class="btn btn-default">retour</a>
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