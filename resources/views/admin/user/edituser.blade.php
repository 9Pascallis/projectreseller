@extends('admin.layout.template')
@section('title', 'Admin | Edit User')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">Edit User</h5>
        <hr><br>
        <!-- JUDUL END-->

        <!-- ISI -->
        <form action="/updateuser/{{ $user->id }}" method="POST">
            @csrf
            <input type="hidden" name="password" value="{{ $user->password}}">
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control me-2" value="{{ $user->email}}" disabled>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_lengkap" class="form-control"
                            value="{{ $user->nama_lengkap}}" required>
                        @error('nama_lengkap')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">No Telp</label>
                    <div class="col-sm-9">
                        <input type="number" name="no_telp" class="form-control" value="{{ $user->no_telp}}" required>
                        @error('no_telp')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" name="alamat" class="form-control" value="{{ $user->alamat}}" required>
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
                                <option value="{{ $provinsi->id }}" {{ $selectedProvinceId == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kabupaten" class="col-sm-3 col-form-label">Kota</label>
                    <div class="col-sm-9">
                        <select class="form-select" style="width: 100%;" id="kabupaten" name="id_kabupaten" required>
                            @foreach ($regencies as $kabupaten)
                                <option value="{{ $kabupaten->id }}" {{ $selectedRegencyId == $kabupaten->id ? 'selected' : '' }}>{{ $kabupaten->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kecamatan" class="col-sm-3 col-form-label">Kecamatan</label>
                    <div class="col-sm-9">
                        <select class="form-select" style="width: 100%;" id="kecamatan" name="id_kecamatan" required>
                            @foreach ($districts as $kecamatan)
                                <option value="{{ $kecamatan->id }}" {{ $selectedDistrictId == $kecamatan->id ? 'selected' : '' }}>{{ $kecamatan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Kode Pos</label>
                    <div class="col-sm-9">
                        <input type="number" name="kode_pos" class="form-control" value="{{ $user->kode_pos}}" required>
                        @error('kode_pos')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-end">
                <div style="padding-right: 5px"><a href="/indexuser" class="btn btn-secondary" role="button"
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
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script>
    $(function() {
  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

    $(function(){
        $('#provinsi').on('change',function(){
        let id_provinsi = $('#provinsi').val();
        console.log(id_provinsi); // check id_provinsi = true

        $.ajax({
            type : 'POST',
            url : "{{ route('getkabupaten') }}",
            data : {id_provinsi:id_provinsi},
            cache : false,
            success: function(msg){
            console.log(msg); // check response JSON
            $('#kabupaten').html(msg);
            $('#kabupaten').niceSelect('destroy'); //destroy the plugin 
            $('#kabupaten').niceSelect();  //apply again
            $('#kecamatan').html('');
            $('#kecamatan').niceSelect('destroy'); //destroy the plugin 
            $('#kecamatan').niceSelect();  //apply again
            },
            error: function(data){
            console.log('error:', data);
            },
        });
        });
    });

    $(function(){
    $('#kabupaten').on('change',function(){
      let id_kabupaten = $('#kabupaten').val();
      console.log(id_kabupaten); // check id_kabupaten = true

      $.ajax({
        type : 'POST',
        url : "{{ route('getkecamatan') }}",
        data : {id_kabupaten:id_kabupaten},
        cache : false,
        success: function(msg){
          console.log(msg); // check response JSON
          $('#kecamatan').html(msg);
          $('#kecamatan').niceSelect('destroy'); //destroy the plugin 
          $('#kecamatan').niceSelect();  //apply again
        },
        error: function(data){
          console.log('error:', data);
        },
      });
    });
  });
});


</script>
@endsection
