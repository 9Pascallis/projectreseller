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
        <form action="/updateadmin-{{ $admin->id }}" method="POST">
            @csrf
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_lengkap_admin" class="form-control"
                            value="{{ $admin->nama_lengkap_admin}}">
                        @error('nama_lengkap_admin')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email_admin"
                            class="form-control @error('email_admin') is-invalid @enderror me-2"
                            value="{{ $admin->email_admin}}">
                        @error('email_admin')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                    <div class="col-sm-9">
                        <input type="number" name="no_telp_admin" class="form-control"
                            value="{{ $admin->no_telp_admin}}">
                        @error('no_telp_admin')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="text" name="password_admin" class="form-control"
                            value="{{ $admin->password_admin}}">
                        @error('password_admin')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="row mb-3">
					<label for="inputText" class="col-sm-3 col-form-label">Password</label>
					<div class="col-sm-9">
						<input type="password" class="form-control mb-2" id="myInput" >
						<input class="form-check-input" type="checkbox" value="" onclick="password()" required>
						<label class="form-check-label">Show Password</label>
					</div>
				</div>    --}}
            </div>
            <br><br>
            <div class="d-flex justify-content-end">
                <div style="padding-right: 5px"><a href="indexadmin" class="btn btn-secondary" role="button"
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
