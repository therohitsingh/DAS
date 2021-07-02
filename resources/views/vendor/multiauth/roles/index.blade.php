@extends('multiauth::layouts.masterhome')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-info text-white">
                                Roles
                                @permitTo('CreateRole')
                                <span class="float-right">
                        <a href="{{ route('admin.role.create') }}" class="btn btn-sm btn-success">New Role</a>
                    </span>
                                @endpermitTo
                            </div>

                            <div class="card-body">
                                @include('multiauth::message')
                                <ol class="list-group">
                                    @foreach ($roles as $role)
                                        <table class="table table-bordered table-contextual">

                                            <td> {{ $role->name }} </td>
                                            <td class="badge badge-primary badge-pill">{{ $role->admins->count() }} {{
                                ucfirst(config('multiauth.prefix')) }}</td>
                                            <td class="badge badge-warning badge-pill">{{ $role->permissions->count() }}
                                                Permissions</td>

                                            <div class="float-right">
                                                @permitTo('DeleteRole,UpdateRole')
                                                <td><a href="" class="btn  btn-danger"
                                                       onclick="event.preventDefault(); document.getElementById('delete-form-{{ $role->id }}').submit();">Delete</a></td>
                                                <form id="delete-form-{{ $role->id }}"
                                                      action="{{ route('admin.role.delete',$role->id) }}" method="POST"
                                                      style="display: none;">
                                                    @csrf @method('delete')
                                                </form>
                                                @endpermitTo

                                                @permitTo('UpdateRole')
                                                <td><a href="{{ route('admin.role.edit',$role->id) }}"
                                                       class="btn btn-success">Edit</a></td>
                                                @endpermitTo
                                            </div>
                                            </li>
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
