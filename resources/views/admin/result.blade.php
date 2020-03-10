@extends('layout.master')
@section('styles')
<style>
    html {
        scroll-behavior: smooth;
    }
</style>
<link rel="stylesheet" href="{{ asset('css/second.css') }}">
<link rel="stylesheet" href="{{ asset('css/Chart.min.css') }}">
@endsection

@section('content')
    <div class="header p-4">
        <div class="row">
            <div class="col-md-3" align="center">
                <img src="{{ asset('img/sey.png') }}" class="img-fluid" width="100px">
            </div>
            <div class="col-md-6">
                <p class="font-weight-bold header-name">ELECTION RESULTS</p>
            </div>
            <div class="col-md-3" align="center">
                <img src="{{ asset('img/ug.png') }}" class="img-fluid" width="100px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                    <div class="card shadow my-3">
                        <div class="card-body">
                            <div align="center">
                                <p>PRESIDENT</p>
                                <img src="{{ asset('img/candidate/'.$president->img) }}" alt="president" height="160px">
                            </div>
                            <div align="center" class="mt-2">
                                <h3 class="d-inline text-center">Yes: {{ $presYes }} -</h3>
                                <h3 class="d-inline text-center">No: {{ $presNo }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <p class="text-center">TREASURER</p>
                        <div class="row">
                            @foreach($treasurers as $treasure)
                               <div class="col-6">
                                   <div align="center">
                                       <img src="{{ asset('img/candidate/'.$treasure->img) }}" alt="president" height="160px">
                                   </div>
                                   <div align="center" class="mt-2">
                                       <h3 class="d-inline text-center"> {{ $treasure->votes->count() }}</h3>
                                   </div>
                               </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <p class="text-center">GENERAL SECRETARY</p>
                        <div class="row">
                            @foreach($secretary as $sec)
                               <div class="col-6">
                                   <div align="center">
                                       <img src="{{ asset('img/candidate/'.$sec->img) }}" alt="president" height="160px">
                                   </div>
                                   <div align="center" class="mt-2">
                                       <h3 class="d-inline text-center"> {{ $sec->votes->count() }}</h3>
                                   </div>
                               </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <p>GENERAL ORGANIZER</p>
                            <img src="{{ asset('img/candidate/'.$organizer->img) }}" alt="president" height="160px">
                        </div>
                        <div align="center" class="mt-2">
                            <h3 class="d-inline text-center">Yes: {{ $orgYes }} -</h3>
                            <h3 class="d-inline text-center">No: {{ $orgNo }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <p class="text-center">GENERAL SPORTS</p>
                        <div class="row">
                            @foreach($sports as $sport)
                                <div class="col-6">
                                    <div align="center">
                                        <img src="{{ asset('img/candidate/'.$sport->img) }}" alt="president" height="160px">
                                    </div>
                                    <div align="center" class="mt-2">
                                        <h3 class="d-inline text-center"> {{ $sport->votes->count() }}</h3>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
