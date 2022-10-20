@extends('layout.master')
@section('content')

<div class="card">
<div class="card-header">
                <h3 class="card-title">Tampil Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/barang/tambah"class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID BARANG</th>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>ID JENIS</th>
                    <th>ID SUPPLIER</th>
                    <th>HARGA JUAL</th>
                    <th>BARANG STATUS</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($barang as $row) 
                  <tr>
                    <td>{{$row->id_barang}}</td>
                    <td>{{$row->barang_kode}}</td>
                    <td>{{$row->barang_nama}}</td>
                    <td>{{$row->jenis_nama}}</td>
                    <td>{{$row->supplier_nama}}</td>
                    <td>{{$row->harga_jual}}</td>
                    <td>{{$row->barang_status}}</td>
                    <td><a href="barang/ubah/{{$row->id}}"class="btn btn-warning">Edit</a>
                        <a href="barang/hapus/{{ $row->id_barang}}" class="btn btn-danger">Delete</a>
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