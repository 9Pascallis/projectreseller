@extends('reseller.layout.template')
@section('title', 'Reseller | Profil')

@section('content')
<br><br>
<div class="single-blog-wrapper mb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="order-details-confirmation">
                    <div class="col">
                        <div class="col-md-12 mb-3 mb-30 text-center">
                            <h5 class="text-center">PROFIL</h5>
                            <hr>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Nama:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $user->nama_lengkap }}" disabled>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Email:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $user->email }}" disabled>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>No Telp:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $user->no_telp }}" disabled>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Alamat:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $user->alamat }}" disabled>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Provinsi:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $selectedProvinceName }}">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Kota:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $selectedRegencyName }}">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Kecamatan:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $selectedDistrictName }}">
                            </div>
                        </div>
                        <div class="row" style="padding-bottom: 10px">
                            <div class="col-md-2">
                                <p class="text-dark"><b>Kode Pos:</b></p>
                            </div>
                            <div class="col-md-10">
                                <input type="text" class="form-control" style="background-color: #ffffff;"
                                    value="{{ $user->kode_pos }}" disabled>
                            </div>
                        </div>
                        <div class="row justify-content-between mt-30">
                            <div class="col-md-3" style="padding-right: 5px;">
                                <a href="editprofil/{{ $user->id }}" class="btn essence-btn bg-secondary">EDIT
                                    PROFIL</a>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-30 mb-30">
                            <div class="col-md-3">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button class="btn essence-btn bg-danger">
                                        LOGOUT
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
@endsection
