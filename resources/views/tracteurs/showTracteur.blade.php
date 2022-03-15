@extends('layouts.app')

@section('title')
    KT-Transport : Tracteur
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
                    <li class="breadcrumb-item active">Tracteurs</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->

    @if (Session::has('success'))
    <div class="col-lg-4 p-l-0 title-center">
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('success')}}
        </div>
    </div>
    @endif
</div>
<!-- /# row -->
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Information du tracteur <strong>{{ $tracteur->marque }}</strong>.</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Marque</label>
                                    <input type="text" class="form-control" name="marque" placeholder="marque" value="{{ $tracteur->marque }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Immatriculation</label>
                                    <input class="form-control" type="text" placeholder="Immatriculation" name="immatriculation" value="{{ $tracteur->immatriculation }}" readonly>
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Type</label>
                                    <input class="form-control" type="text" placeholder="type" name="type" value="{{ $tracteur->type }}" readonly>
                                </div>
                            </div>
                            <!-- <button type="submit" class="btn btn-success">Valider</button> &nbsp;&nbsp; -->
                            <a href="{{ route('tracteurs.index') }}" class="btn btn-default">retour</a>
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