@extends('layouts.app')

@section('title')
KT-Transport : Panne
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
                    <li class="breadcrumb-item active">Panne</li>
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
                <h4>Information sur la panne du {{ $panne->date }} .</h4>

            </div>
            <div class="card-body">
                <div class="basic-elements">
                    <form method="POST" action="#">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="date" readonly value="{{$panne->date }}" >
                                </div>
                                <div class="form-group">
                                    <label>Panne Declare</label>
                                    <input class="form-control" type="text" name="panneDeclare" readonly value="{{$panne->panneDeclare }}">
                                </div>
                                <div class="form-group">
                                    <label>Tracteur</label>
                                    <input class="form-control" type="text"  readonly value="{{$panne->tracteur->marque }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Cout</label>
                                    <input class="form-control" type="text" name="cout" readonly value="{{$panne->cout }}">
                                </div>
                                <div class="form-group">
                                    <label>Commentaire</label>
                                    <textarea class="form-control" rows="10" name="commentaire" readonly> {{ $panne->commentaire }} </textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Valider</button> &nbsp;&nbsp;
                            <a href="{{ route('pannes.index') }}" class="btn btn-default">retour</a>
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