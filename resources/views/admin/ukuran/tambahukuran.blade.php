@extends('admin.layout.template')
@section('title', 'Admin | Tambah Ukuran')

@section('content')
<div class="card">
    <div class="card-body">

        <!--JUDUL-->
        <h5 class="mb-0 text-uppercase text-center">Tambah Ukuran</h5>
        <hr><br>

        <!-- ISI -->
        <form action="/insertdataukuran" method="POST">
            @csrf
            <div class="row" style="margin-left: 20px; margin-right: 20px">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-3 col-form-label">Nama Ukuran</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_ukuran" value="{{old('nama_ukuran')}}"
                            class="form-control @error('nama_ukuran') is-invalid @enderror me-2" required>
                        @error('nama_ukuran')
                        <span class="invalid-feedback">{{ $message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-end">
                <div style="padding-right: 5px"><a href="indexukuran" class="btn btn-secondary" role="button"
                        aria-pressed="true">Cancel</a></div>
                <div><button type="submit" class="btn btn-success">Tambah</button></div>
            </div>
        </form>

    </div>
</div>
@endsection
