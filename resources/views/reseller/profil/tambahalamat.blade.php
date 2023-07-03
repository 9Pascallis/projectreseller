@extends('reseller.layout.template')
@section('title', 'Reseller | Tambah Alamat')
@section('header')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
                                        <div class="col-md-11 mb-3">
                                            <label for="provinsi"><b>Provinsi </b><span>*</span></label>
                                            <select class="w-100" id="provinsi" name="id_provinsi" required>
                                                <option>PILIH PROVINSI...</option>
                                                @foreach ($provinces as $provinsi)
                                                <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-11 mb-3">
                                            <label for="kabupaten"><b>Kota </b><span>*</span></label>
                                            <select class="w-100" id="kabupaten" name="id_kabupaten" required>
                                            </select>
                                        </div>
                                        <div class="col-md-11 mb-3">
                                            <label for="kecamatan"><b>Kecamatan </b><span>*</span></label>
                                            <select class="w-100" id="kecamatan" name="id_kecamatan" required> 
                                            </select>
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
