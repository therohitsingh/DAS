@extends('multiauth::layouts.masterhome')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                {{ ucfirst(config('multiauth.prefix')) }} List
                                <span class="float-right">
                        <a href="{{route('admin.register')}}" class="btn btn-sm btn-success">New {{ ucfirst(config('multiauth.prefix')) }}</a>
                    </span>
                            </div>
                            <div class="card-body">
                                @include('multiauth::message')
                                <ul class="list-group">
                                    @foreach ($admins as $admin)
                                        <table class="table table-bordered table-contextual">
                                            <td>
                                                {{ $admin->name }}</td>
                                            <td class="badge">
                                            @foreach ($admin->roles as $role)
                                                <td class="badge-warning ">
                                                    {{ $role->name }}
                                                </td> @endforeach
                                                </td>
                                                <td> {{ $admin->active? 'Active' : 'Inactive' }}</td>
                                                <div class="float-right">
                                                    <td><a  href="#" class="btn  btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $admin->id }}').submit();">Delete</a></td>
                                                    <form id="delete-form-{{ $admin->id }}" action="{{ route('admin.delete',[$admin->id]) }}" method="POST" style="display: none;">
                                                        @csrf @method('delete')
                                                    </form>

                                                    <td><a href="{{route('admin.edit',[$admin->id])}}" class="btn btn-success">Edit</a></td>
                                                </div>
                                                </li>
                                            @endforeach @if($admins->count()==0)
                                                <p>No {{ config('multiauth.prefix') }} created Yet, only super {{ config('multiauth.prefix') }} is available.</p>
                                        @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
