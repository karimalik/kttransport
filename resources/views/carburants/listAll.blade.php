@extends('layouts.app')

@section('title')
KT-Transport: Listing Carburants
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
                    <li class="breadcrumb-item active">Carburants</li>
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
   &nbsp; &nbsp; <a href="{{ route('carburants.create')}}" class="btn btn-primary btn-flat btn-addon m-b-10 m-l-5"><i class="ti-plus"></i>Ajouter</a>
   &nbsp; <a href="{{ route('recherche.index')}}" class="btn btn-secondary btn-flat btn-addon m-b-10 m-l-5"><i class="ti-search"></i>Rechercher</a>
    <div class="col-lg-12">
        <div class="card">
            <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Quantite</th>
                                <th class="text-center">Montant</th>
                                <th class="text-center">Marque</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($carburants as $carburant)
                            <tr>
                                <td class="text-center"> {{ $carburant->date }} </td>
                                <td class="text-center">{{ $carburant->quantite }} Litre</td>
                                <td class="text-center">{{ $carburant->montant }} CFA</td>
                                <td class="text-center">{{ $carburant->tracteur->marque }}</td>
                                <td class="text-center">
                                    <form action="{{ route('carburants.destroy', $carburant->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('carburants.show', $carburant->id) }}" class="btn btn-warning"><i class="ti-eye"></i></a>
                                        <a href="{{ route('carburants.edit', $carburant->id) }}" class="btn btn-info"><i class="ti-pencil-alt2"></i></a>

                                        <button type="submit" class="btn btn-danger "><i class="ti-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
    <!-- /# column -->
</div>
<!-- /# row -->
@endsection

@section('extra-js')
<script src="{{ asset('theme/js/lib/data-table/datatables.min.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/buttons.flash.min.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/jszip.min.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/pdfmake.min.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/vfs_fonts.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/buttons.html5.min.js') }}"></script>
<script src="{{ asset('theme/js/lib/data-table/buttons.print.min.js') }}"></script>
<script src="{{asset('theme/js/lib/data-table/datatables-init.js')}}"></script>
@endsection