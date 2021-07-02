@extends('frontend.main')
@section('content')
    <br>
    <br>
    <br>
   <center><h4 class="card-title">Covid-19 Tracker</h4></center>
                        <div class="container">
                            <div class="row text-center">
                                <div class="col-4">
                                    <h5>Confirmed</h5>
                                    <h3 class="text-warning">{{$total_confirmed}}</h3>
                                </div>
                                <div class="col-4">
                                    <h5>Recovered</h5>
                                    <h3 class="text-success">{{$total_recovered}}</h3>
                                </div>
                                <div class="col-4">
                                    <h5>Deceased</h5>
                                    <h3 class="text-danger">{{$total_deaths}}</h3>
                                </div>
                        </div>

                        <div class="table-responsive table-dark text-white">
                            <table class="table table-bordered table-contextual text-white">
                                <thead>
                                <tr>
                                    <th> Countries </th>
                                    <th> Confirmed </th>
                                    <th> Recovered </th>
                                    <th> Deceased </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $key => $value)

                                    <tr >


                                        <td>{{$key}} </td>
                                        <td> {{$value[$days_count]['confirmed']}}

    <small class="text-danger"><i class="fas fa-arrow-up"></i>+{{$value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed']}} </small>


                                        </td>

                                        <td> {{$value[$days_count]['recovered']}}
                                            <small class="text-danger"><i class="fas fa-arrow-up"></i>+{{$value[$days_count]['recovered']-$value[$days_count_prev]['recovered']}} </small>
                                        </td>
                                        <td> {{$value[$days_count]['deaths']}}
                                            <small class="text-danger"><i class="fas fa-arrow-up"></i>+{{$value[$days_count]['deaths']-$value[$days_count_prev]['deaths']}} </small></td>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
