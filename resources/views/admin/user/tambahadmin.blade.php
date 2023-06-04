@extends('admin.layout.template')
@section('title', 'Admin | Tambah Admin')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Tambah Admin</h5>
        <hr><br>
        <!-- JUDUL END-->

        <!-- ISI -->
        <form action="/insertdataadmin" method="POST">
            @csrf
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <input type="hidden" name="id_role" value="1">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_lengkap_user"
                            value="{{old('nama_lengkap_user')}}" required>
                        @error('nama_lengkap_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('email') is-invalid @enderror me-2" name="email"
                            value="{{old('email')}}" required>
                        @error('email')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" name="no_telp_user" value="{{old('no_telp_user')}}"
                            required>
                        @error('no_telp_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" value="{{old('password')}}"
                            required>
                        @error('password')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-end">
                <div style="padding-right: 5px"><a href="indexuser" class="btn btn-secondary" role="button"
                        aria-pressed="true">Cancel</a></div>
                <div><button type="submit" class="btn btn-success">Tambah</button></div>
            </div>
        </form>

    </div>
</div>
@endsection
