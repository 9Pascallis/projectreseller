@extends('admin.layout.template')
@section('title', 'Admin | Tambah Admin')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                        <input type="text" class="form-control" name="nama_lengkap" value="{{old('nama_lengkap')}}"
                            required>
                        @error('nama_lengkap')
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
                        <input type="number" class="form-control" name="no_telp" value="{{old('no_telp')}}" required>
                        @error('no_telp')
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
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}" required>
                        @error('alamat')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="provinsi" class="col-sm-3 col-form-label">Provinsi</label>
                    <div class="col-sm-9">
                        <select class="form-select" style="width: 100%;" id="provinsi" name="id_provinsi" required>
                            @foreach ($provinces as $provinsi)
                            <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kabupaten" class="col-sm-3 col-form-label">Kota</label>
                    <div class="col-sm-9">
                        <select class="form-select" style="width: 100%;" id="kabupaten" name="id_kabupaten" required>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kabupaten" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <select class="form-select" style="width: 100%;" id="kecamatan" name="id_kecamatan" required>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Kode Pos </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="kode_pos" value="{{old('kode_pos')}}" required>
                        @error('kode_pos')
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

@section('javascript')
<script>
    @if(Session::has('create'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('create') }}");
    @endif

    @if(Session::has('update'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('update') }}");
    @endif

</script>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script>
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function () {
            $('#provinsi').on('change', function () {
                let id_provinsi = $('#provinsi').val();
                console.log(id_provinsi); // check id_provinsi = true

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getkabupaten') }}",
                    data: {
                        id_provinsi: id_provinsi
                    },
                    cache: false,
                    success: function (msg) {
                        console.log(msg); // check response JSON
                        $('#kabupaten').html(msg);
                        $('#kabupaten').niceSelect('destroy'); //destroy the plugin 
                        $('#kabupaten').niceSelect(); //apply again
                        $('#kecamatan').html('');
                        $('#kecamatan').niceSelect('destroy'); //destroy the plugin 
                        $('#kecamatan').niceSelect(); //apply again
                    },
                    error: function (data) {
                        console.log('error:', data);
                    },
                });
            });
        });

        $(function () {
            $('#kabupaten').on('change', function () {
                let id_kabupaten = $('#kabupaten').val();
                console.log(id_kabupaten); // check id_kabupaten = true

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getkecamatan') }}",
                    data: {
                        id_kabupaten: id_kabupaten
                    },
                    cache: false,
                    success: function (msg) {
                        console.log(msg); // check response JSON
                        $('#kecamatan').html(msg);
                        $('#kecamatan').niceSelect('destroy'); //destroy the plugin 
                        $('#kecamatan').niceSelect(); //apply again
                    },
                    error: function (data) {
                        console.log('error:', data);
                    },
                });
            });
        });
    });

</script>
@endsection
