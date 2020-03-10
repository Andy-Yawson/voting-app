@extends('layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/second.css') }}">
@endsection
@section('content')
    <div align="center">
        <h3 class="font-weight-light text-center text-dark mt-5">Confirm Candidates</h3>
        <h5 class="font-weight-bold text-center text-dark mt-1">Once you click confirm you can't make changes.</h5>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <p>President</p>
                            <img src="{{ asset('img/candidate/'.$president->img) }}" alt="president" height="200px">
                        </div>
                        <h5 class="text-center p-3">{{ $president->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <p>Treasurer</p>
                            <img src="{{ asset('img/candidate/'.$treasurer->img) }}" alt="president" height="200px">
                        </div>
                        <h5 class="text-center p-3">{{ $treasurer->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <p>Secretary</p>
                            <img src="{{ asset('img/candidate/'.$secretary->img) }}" alt="president" height="200px">
                        </div>
                        <h5 class="text-center p-3">{{ $secretary->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <p>Organizer</p>
                            <img src="{{ asset('img/candidate/'.$organizer->img) }}" alt="president" height="200px">
                        </div>
                        <h5 class="text-center p-3">{{ $organizer->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <p>Sport</p>
                            <img src="{{ asset('img/candidate/'.$sport->img) }}" alt="president" height="200px">
                        </div>
                        <h5 class="text-center p-3">{{ $sport->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card shadow my-3">
                    <div class="card-body">
                        <a href="{{ route('app.vote.yes') }}" class="btn btn-success btn-block p-3" style="font-size: 20px">Yes I Vote For Them</a>
                        <a href="{{ route('app.vote.no') }}" class="btn btn-danger btn-block p-3" style="font-size: 20px">No I want to change</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
