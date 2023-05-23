@extends('reseller.layout.template')
@section('title', 'Reseller | Profil')
@section('content')
<br><br>
<!-- ##### Blog Wrapper Area Start ##### -->
<div class="single-blog-wrapper mb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="order-details-confirmation">
                    <div class="col">
                        <div class="col-md-12 mb-3 mb-30 text-center">
                            <h4 class="text-center">DETAIL PROFIL</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <label for="first_name">Nama Lengkap</label>
                                    <h6>{{ $user->nama_lengkap_user }}</h6>
                                </div>
                                <div class="col-md-12">
                                    <label for="company">Nomor Telp</label>
                                    <h6>{{ $user->no_telp_user }}</h6>
                                </div>
                                <div class="col-md-12">
                                    <label for="company">Provinsi</label>
                                    <h6>{{ $user->provinsi_user }}</h6>
                                </div>
                                <div class="col-md-12">
                                    <label for="company">Kecamatan</label>
                                    <h6>{{ $user->kecamatan_user }}</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <label for="last_name">Email</label>
                                    <h6>{{ $user->email }}</h6>
                                </div>
                                <div class="col-md-12">
                                    <label for="company">Alamat</label>
                                    <h6>{{ $user->alamat_user }}</h6>
                                </div>
                                <div class="col-md-12">
                                    <label for="company">Kota</label>
                                    <h6>{{ $user->kota_user }}</h6>
                                </div>
                                <div class="col-md-12">
                                    <label for="company">Kode Pos</label>
                                    <h6>{{ $user->kode_pos_user }}</h6>
                                </div>
                            </div>


                            {{-- <div class="col-12 text-right">
                                    <a href="{{route('editprofil')}}" class="btn essence-btn bg-warning">Edit
                            Profil</a> --}}
                        </div><br>
                        <div class="row justify-content-between">
                            <div class="col-md-3" style="padding-right: 5px; padding-bottom: 10px">
                                <a href="{{route('reseller-editprofil')}}" class="btn essence-btn bg-secondary">GANTI PROFIL</a>
                            </div>
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
                    <br>
                    {{-- <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="first_name">Alamat <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" value="" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">Provinsi <span>*</span></label>
                                    <select class="w-100" id="country">
                                        <option value="usa">-</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">Kota <span>*</span></label>
                                    <select class="w-100" id="country">
                                        <option value="usa">-</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">Kecamatan <span>*</span></label>
                                    <select class="w-100" id="country">
                                        <option value="usa">-</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="country">Kode Pos <span>*</span></label>
                                    <select class="w-100" id="country">
                                        <option value="usa">-</option>
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                    </select>
                                </div>
                            </div>
                        </form> --}}

                </div>

            </div>
        </div>
    </div>
</div>
</div>
<!-- ##### Blog Wrapper Area End ##### -->
@endsection
