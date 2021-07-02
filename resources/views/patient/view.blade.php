@extends('dashboard.master') @section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            @if(session('message'))

                <p class ="alert alert-success">
                    {{session('message')}}
                </p>

            @endif
            <br>

            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Student Data</h4>
                        <p class="card-description"> Student Credentials
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-contextual">
                                <thead>
                                <tr>
                                    <th> Countries </th>
                                    <th> Confirmed </th>
                                    <th> Recovered </th>
                                    <th> Deceased </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $data3)
                                    <tr >


                                        <td> {{$data3->email}} </td>
                                        <td> {{$data3->blood}} </td>
                                        <td> {{$data3->age}} </td>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
