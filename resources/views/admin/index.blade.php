@extends('admin.layout.template')
@section('title', 'Admin | Dashboard')
@section('content')


<!--start breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <h4>Dashboard Admin</h4>
    {{-- <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                        <ion-icon name="home-outline"></ion-icon>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
    </div> --}}
</div>
<!--end breadcrumb-->


<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-3">

    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-branding text-white">
                        <ion-icon name="pie-chart-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <h4>Rp. {{ number_format($totalHargaPemesanan, 0, ',', '.') }}</h4>

                    </div>
                </div>
                <h6 class="my-3">Total Pemasukan</h6>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-branding" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-purple text-white">
                        <ion-icon name="people-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <h4>{{ $totalUser1 }}</h4>
                    </div>
                </div>
                <h6 class="my-3">Total Admin</h6>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-warning text-white">
                        <ion-icon name="people-sharp" role="img" class="md hydrated" aria-label="logo facebook">
                        </ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <h4>{{ $totalUser2 }}</h4>
                    </div>
                </div>
                <h6 class="my-3">Total User</h6>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-info text-white">
                        <ion-icon name="bag-handle-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <h4>{{ $totalPemesanan }}</h4>
                    </div>
                </div>
                <h6 class="my-3">Total Pesanan Keseluruhan</h6>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-danger text-white">
                        <ion-icon name="card-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <h4>{{ $totalPemesanan1 }}</h4>
                    </div>
                </div>
                <h6 class="my-3">Total Pesanan Belum Dikonfirmasi</h6>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card radius-10">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="widget-icon-2 bg-gradient-success text-white">
                        <ion-icon name="wallet-sharp"></ion-icon>
                    </div>
                    <div class="fs-5 ms-auto">
                        <h4>{{ $totalPemesanan2 }}</h4>
                    </div>
                </div>
                <h6 class="my-3">Total Pesanan Sudah Dikonfirmasi</h6>
                <div class="progress mt-1" style="height: 5px;">
                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card radius-10">
    <div class="card-body">
      <div class="text-center">
        <h5 class="mb-0 text-dark text-center">STOK ITEM PRODUK KURANG DARI 10</h5>
       </div><br>
       <div class="table-responsive mt-2">
        <table class="table align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th class="text-center">No</th>
              <th>Foto</th>
              <th>Nama Produk</th>
              <th class="text-center">Ukuran</th>
              <th class="text-center">Warna</th>
              <th class="text-center">Sisa Stok</th>
              {{-- <th class="text-center">Status</th> --}}
              <th class="text-center">Tambah Stok</th>
            </tr>
          </thead>
          <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($item_produk as $item)
            <tr>
                <td>{{ $no++}}</td>
                <td>
                    <div class="d-flex align-items-center gap-3">
                      <div class="product-box border">
                         <img src="{{asset('storage/'.$item->foto_item_produk)}}" alt="">
                      </div>
                    </div>
                  </td>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="product-info">
                      <p class="product-name mb-1">{{ $item->produk->nama_produk }}</p>
                    </div>
                  </div>
                </td>
                <th class="text-center">{{ $item->ukuran->nama_ukuran }}</td>
                <td class="text-center">{{ $item->warna->nama_warna }}</td>
                <td class="text-center">{{ $item->jumlah_stok }}</td>
                <td class="text-center">
                    <a class="btn btn-sm btn-outline-info px-2"
                        href="/tambahstokitemproduk/{{ $item->id }}"><i class="fa fa-plus"></i></a>
                </td>
              </tr>
            @endforeach
            
          </tbody>
        </table>
      </div>
    </div>
  </div>

{{-- <div class="card radius-10 overflow-hidden w-100">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <h6 class="mb-0">Jumlah Pesanan</h6>
            <div class="dropdown options ms-auto">
                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Hari ini</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Tahun ini</a></li>
                </ul>
            </div>
        </div>
        <div class="chart-container1">
            <canvas id="chart1"></canvas>
        </div>
    </div>
</div>

<div class="card radius-10 w-100">
    <div class="card-body">
        <div class="d-flex align-items-center mb-3">
            <h6 class="mb-0">Total Pendapatan</h6>
            <div class="dropdown options ms-auto">
                <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="javascript:;">Hari ini</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="javascript:;">Tahun ini</a></li>
                </ul>
            </div>
        </div>
        <div class="chart-container7">
            <canvas id="chart4"></canvas>
        </div>
    </div>
</div> --}}
</div>


@endsection
@section('javascript')
<script src="assets_admin/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="assets_admin/js/index2.js"></script>
@endsection
