@extends('layout.master')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/first.css') }}">
@endsection

@section('content')
    <div class="header p-4">
        <div class="row">
            <div class="col-md-3" align="center">
                <img src="{{ asset('img/sey.png') }}" class="img-fluid" width="100px">
            </div>
            <div class="col-md-6">
                <p class="font-weight-bold header-name">ELIZABETH FRANCES SEY HALL</p>
            </div>
            <div class="col-md-3" align="center">
                <img src="{{ asset('img/ug.png') }}" class="img-fluid" width="100px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card border-0 shadow my-5">
            @include('flash._notify')
            <div class="card-body p-5">
                <h3 class="font-weight-bold text-center">Please Verify With Your Index Number</h3>
                <form action="{{ route('app.verify') }}" method="post">
                    @csrf
                    <div class="form-group mt-5 input-field">
                        <label>Student ID</label>
                        <input type="text" class="form-control" name="index">
                    </div>

                    <div class="btn-div">
                        <button type="submit" class="btn btn-dark btn-block w-50 mx-auto">Verify Index</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
