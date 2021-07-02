@extends('multiauth::layouts.masterhome')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register New {{ ucfirst(config('multiauth.prefix')) }}</div>
                            <div class="card-body">
                                @include('multiauth::message')
                                <form method="POST" action="{{ route('admin.register') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" style="color: white"  class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                                   required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" style="color: white"  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('specialization') ? ' has-error' : '' }} row" >
                                        <label for="email" class="col-md-4 col-form-label text-md-right">Your Specialization</label>
                                        <div class="col-sm-6">
                                            <select name="specialization" style="color: white" class="form-control text" required>
                                                <option  value="0" selected disabled>Select</option>
                                                <option value="Gynecologist/Obstetrician">Gynecologist/Obstetrician</option>
                                                <option value="General Physician">General Physician</option>
                                                <option value="Dermatologist">Dermatologist</option>
                                                <option value="Homeopath">Homeopath</option>
                                                <option value="Ayurveda	">Ayurveda</option>
                                                <option value="Dentist">Dentist</option>
                                                <option value="Ear-Nose-Throat (Ent) Specialist	">Ear-Nose-Throat (Ent) Specialist</option>
                                                <option value="Bones Specialist">Bones Specialist</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' text-danger' : '' }} row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" style="color: white" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" style="color: white"  type="password" class="form-control" name="password_confirmation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="role_id" class="col-md-4 col-form-label text-md-right">Assign Role</label>

                                        <div class="col-md-6">
                                            <select name="role_id[]" id="role_id" class="form-control {{ $errors->has('role_id') ? ' is-invalid' : '' }}" multiple>
                                                <option selected disabled>Select Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Register
                                            </button>

                                            <a href="{{ route('admin.show') }}" class="btn btn-danger btn-sm float-right">
                                                Back
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
