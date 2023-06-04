@extends('reseller.layout.template')
@section('title', 'Reseller | Tambah Alamat')
@section('content')
<br><br>
<div class="single-blog-wrapper mb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="regular-page-content-wrapper">
                    <div class="regular-page-text">
                        <div class="order-details-confirmation">
                            <form action="/tambahalamat/{{ $user->id }}" method="POST">
                                @csrf
                                <div class="checkout_details_area clearfix">
                                    <div class="row">
                                        <div class="col-md-12 mb-3 mb-30 text-center">
                                            <h4 class="text-center">TAMBAH ALAMAT</h4>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Alamat <span>*</span></label>
                                            <input type="text" name="alamat" class="form-control" required>
                                            @error('alamat')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Provinsi <span>*</span></label>
                                            <input type="text" name="provinsi" class="form-control" required>
                                            @error('provinsi')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Kota <span>*</span></label>
                                            <input type="text" name="kota" class="form-control" required>
                                            @error('kota')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Kecamatan <span>*</span></label>
                                            <input type="text" name="kecamatan" class="form-control" required>
                                            @error('kecamatan')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="inputText">Kode Pos <span>*</span></label>
                                            <input type="text" name="kode_pos" class="form-control" required>
                                            @error('kode_pos')
                                            <span class="invalid-feedback">{{ $message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-end mt-30">
                                        <div style="padding-right: 5px; padding-bottom: 10px"><a href="profil"
                                                class="btn essence-btn bg-warning" role="button"
                                                aria-pressed="true">Cancel</a></div>
                                        <div><button type="submit" class="btn essence-btn bg-success">Simpan</button>
                                        </div>
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
<!-- ##### Blog Wrapper Area End ##### -->
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
@endsection
