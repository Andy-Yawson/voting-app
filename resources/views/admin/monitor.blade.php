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
                <p class="font-weight-bold header-name">ELIZABETH FRANCES SEY HALL</p>
                <div class="list-links-div">
                    <ul class="d-flex d-inline-block list-unstyled">
                        <li class="pr-2"><a href="#pres">President</a></li>
                        <li class="pr-2"><a href="#trea">Treasurer</a></li>
                        <li class="pr-2"><a href="#sec">General Secretary</a></li>
                        <li class="pr-2"><a href="#org">Organizing Secretary</a></li>
                        <li class="pr-2"><a href="#spt">Sport Secretary</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3" align="center">
                <img src="{{ asset('img/ug.png') }}" class="img-fluid" width="100px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card border-0 shadow my-5 p-4" id="pres">
            <div>
                <h3 class="font-weight-bold text-center text-success"> PRESIDENT AND VICE PRESIDENT</h3>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="card border-0 shadow my-5 p-4" id="trea">
            <div>
                <h3 class="font-weight-bold text-center text-success">TREASURER</h3>
                <canvas id="myChart2" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="card border-0 shadow my-5 p-4" id="sec">
            <div>
                <h3 class="font-weight-bold text-center text-success">GENERAL SECRETARY</h3>
                <canvas id="myChart3" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="card border-0 shadow my-5 p-4" id="org">
            <div>
                <h3 class="font-weight-bold text-center text-success">ORGANIZING SECRETARY</h3>
                <canvas id="myChart4" width="400" height="200"></canvas>
            </div>
        </div>
        <div class="card border-0 shadow my-5 p-4" id="spt">
            <div>
                <h3 class="font-weight-bold text-center text-success">SPORT SECRETARY</h3>
                <canvas id="myChart5" width="400" height="200"></canvas>
            </div>
        </div>

        <a href="{{ route('web.end.election') }}" class="btn btn-block btn-primary mb-4 p-3" style="font-size: 25px">END ELECTION PROGRESS</a>
    </div>
@endsection
@section('scripts')
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script>
    $(document).ready(function () {

        const getPresident = () => {
            return $.ajax({
                url: "{{ route('web.president.data') }}",
                type: "GET",
            });
        };
        getPresident().then(data => {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Yes', 'No'],
                    datasets: [{
                        label: '# of Votes',
                        data: [data.yesVotes, data.noVotes],
                        borderWidth: 2,
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                        ],
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

        const getTreasurer = () => {
            return $.ajax({
                url: "{{ route('web.treasurer.data') }}",
                type: "GET",
            });
        };
        getTreasurer().then(data => {
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [data[0].name, data[1].name],
                    datasets: [{
                        label: '# of Votes',
                        data: [data[0].votes, data[1].votes],
                        borderWidth: 2,
                        backgroundColor: [
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                        ],
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

        const getSecretary = () => {
            return $.ajax({
                url: "{{ route('web.secretary.data') }}",
                type: "GET",
            });
        };
        getSecretary().then(data => {
            console.log(data)
            var ctx = document.getElementById('myChart3').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [data[0].name, data[1].name],
                    datasets: [{
                        label: '# of Votes',
                        data: [data[0].votes, data[1].votes],
                        borderWidth: 2,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(75, 192, 192, 1)',
                        ],
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

        const getOrganizing = () => {
            return $.ajax({
                url: "{{ route('web.organizer.data') }}",
                type: "GET",
            });
        };
        getOrganizing().then(data => {
            var ctx = document.getElementById('myChart4').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Yes', 'No'],
                    datasets: [{
                        label: '# of Votes',
                        data: [data.yesVotes, data.noVotes],
                        borderWidth: 2,
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 99, 132, 1)',
                        ],
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

        const getSports = () => {
            return $.ajax({
                url: "{{ route('web.sports.data') }}",
                type: "GET",
            });
        };
        getSports().then(data => {
            var ctx = document.getElementById('myChart5').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [data[0].name, data[1].name],
                    datasets: [{
                        label: '# of Votes',
                        data: [data[0].votes, data[1].votes],
                        borderWidth: 2,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(255, 159, 64, 1)',
                        ],
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        });

    });
</script>
@endsection
