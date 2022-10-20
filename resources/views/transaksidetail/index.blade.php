@extends('layout.master')
@section('content')

<div class="card">
<div class="card-header">
                <h3 class="card-title">Tampil Data Transaksi Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/transaksi"class="btn btn-primary">Kembali</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID TRANSAKSI DETAIL</th>
                    <th>ID BARANG</th>
                    <th>TRANSAKSI JENIS</th>
                    <th>TRANSAKSI HARGA</th>
                    <th>TRANSAKSI JUMLAH</th>
                    <th>TRANSAKSI DETAIL STATUS</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($transaksidetail as $row)
                  <tr>
                    <td>{{$row->id_transaksi_detail}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->transaksi_jenis}}</td>
                    <td>{{$row->transaksi_harga}}</td>
                    <td>{{$row->transaksi_jumlah}}</td>
                    <td>{{$row->transaksi_detail_status}}</td>
                    <td>
                        <a href="transaksi_detail/ubah/{{$row->id}}"class="btn btn-warning">Edit</a>
                        <a href="transaksi_detail/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
@endforeach    
                  <tbody>       
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection