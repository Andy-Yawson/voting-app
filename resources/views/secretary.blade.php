@extends('layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/second.css') }}">
@endsection
@section('content')
    <div align="center">
        <h3 class="font-weight-bold text-center text-dark mt-5">GENERAL SECRETARY</h3>
        <h5 class="font-weight-bold text-center text-dark mt-1">Click the vote button under your choice of position.</h5>
    </div>
    <div class="container">
        <div class="row">
            @if(count($secretary) > 0)
                @foreach($secretary as $sec)
                    <div class="col-md-6">
                        <div class="card border-0 shadow my-3">
                            <div class="card-body">
                                <div align="center">
                                    <img src="{{ asset('img/candidate/'.$sec->img) }}" alt="president" height="300px">
                                </div>
                                <h3 class="text-center p-3">{{ $sec->name }}</h3>
                            </div>
                            <div class="card-footer">
                                <div align="center">
                                    <form action="{{ route('app.secretary.vote') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="candidate_id" value="{{ $sec->id }}">
                                        <button class="btn btn-dark btn-block">Vote</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
