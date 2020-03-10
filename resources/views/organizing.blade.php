@extends('layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/second.css') }}">
@endsection
@section('content')
    <div align="center">
        <h3 class="font-weight-bold text-center text-dark mt-5">ORGANIZING SECRETARY</h3>
        <h5 class="font-weight-bold text-center text-dark mt-1">Click yes or no button for this position.</h5>
    </div>
    <div class="container">
        @if(count($organizers) > 0)
            @foreach($organizers as $organizer)
                <div class="w-50 mx-auto card border-0 shadow my-3">
                    <div class="card-body">
                        <div align="center">
                            <img src="{{ asset('img/candidate/'.$organizer->img) }}" alt="president" height="300px">
                        </div>
                        <h3 class="text-center p-3">{{ $organizer->name }}</h3>
                    </div>
                    <div class="card-footer">
                        <div align="center">
                            <a class="btn btn-success btn-block"
                            href="{{ route('app.organizer.vote',['id'=>$organizer->id,'vote'=>1]) }}">Yes</a>
                            <a class="btn btn-danger btn-block"
                            href="{{ route('app.organizer.vote',['id'=>$organizer->id,'vote'=>0]) }}">No</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
