@extends('layout.master')
@section('content')

<div class="card">
<div class="card-header">
                <h3 class="card-title">Tampil Data Jenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/jenis/tambah"class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID JENIS</th>
                    <th>NAMA JENIS</th>
                    <th>JENIS STATUS</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($jenis as $row) 
                  <tr>
                    <td>{{$row->id_jenis}}</td>
                    <td>{{$row->jenis_nama}}</td>
                    <td>{{$row->jenis_status}}</td>
                    <td><a href="jenis/ubah/{{$row->id}}"class="btn btn-warning">Edit</a>
                        <a href="jenis/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>
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