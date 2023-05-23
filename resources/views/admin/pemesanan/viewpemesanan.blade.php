@extends('admin.layout.template')
@section('title', 'Admin | View Pemesanan')
@section('header')
<link href="assets_admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <!-- JUDUL -->
        <h5 class="mb-0 text-uppercase text-center">View Pemesanan</h5>
        <hr><br>
        <!-- JUDUL END -->

        <!-- ISI -->
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NO INVOICE</th>
                        <th>PEMESAN</th>
                        <th>TOTAL HARGA</th>
                        <th class="text-center">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>023482346128912</td>
                        <td>PASCALLIS HENOCH HERUTOMO</td>
                        <td>Rp.440.000</td>
                        <td class="text-center"><span class="badge bg-warning">BELUM DIBAYAR</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- ISI END -->
    </div>
</div>
@endsection

@section('javascript')
<script src="assets_admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets_admin/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="assets_admin/js/table-datatable.js"></script>
@endsection
