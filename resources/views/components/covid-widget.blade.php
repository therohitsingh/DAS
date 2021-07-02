@extends('frontend.main')
@section('content')

    <div class="m-3">
    <div class="card text-white bg-dark mb-3" style="max-width: 22rem;">
        <div class="card-header"> COVID-19 Stats For {{$nation}} </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    {{$report["cases"]}}
                </div>
                <div class="col">{{$report["deaths"]}}</div>
                <div class="col">{{$report["recovered"]}}</div>
            </div>
            <div class="row">
                <div class="col">
                    Total cases
                </div>
                <div class="col">Death</div>
                <div class="col">Recovered</div>
        </div>
    </div>
    </div>
</div>

@endsection
