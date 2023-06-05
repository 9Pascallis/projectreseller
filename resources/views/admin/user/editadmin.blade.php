@extends('admin.layout.template')
@section('title', 'Admin | Edit Admin')

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Edit Admin</h5>
        <hr><br>
        <!-- JUDUL END-->

        <!-- ISI -->
        <form action="/updateadmin/{{ $user->id }}" method="POST">
            @csrf
            <input type="hidden" name="password" value="{{ $user->password}}">
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_lengkap_user" class="form-control"
                            value="{{ $user->nama_lengkap_user}}">
                        @error('nama_lengkap_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control me-2" value="{{ $user->email}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                    <div class="col-sm-9">
                        <input type="number" name="no_telp_user" class="form-control" value="{{ $user->no_telp_user}}">
                        @error('no_telp_user')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-end">
                <div style="padding-right: 5px"><a href="/indexadmin" class="btn btn-secondary" role="button"
                        aria-pressed="true">Cancel</a></div>
                <div><button type="submit" class="btn btn-success">Simpan</button></div>
            </div>
        </form>
        <!-- ISI END -->
    </div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/js/password.js"></script>
@endsection
