@extends('layout.master')
@section('content')

<div class="card">
<div class="card-header">
                <h3 class="card-title">Tampil Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="/admin/tambah"class="btn btn-primary">Tambah</a>
              <hr>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID ADMIN</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ADMIN LEVEL</th>
                    <th>ADMIN NAMA</th>
                    <th>ADMIN STATUS</th>
                    <th>AKSI</th>
                  </tr>
                  </thead>
                  <tbody>
@foreach($admin as $row)                   
                  <tr>
                    <td>{{$row->id_admin}}</td>
                    <td>{{$row->username}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->admin_level}}</td>
                    <td>{{$row->admin_nama}}</td>
                    <td>{{$row->admin_status}}</td>
                    <td><a href="admin/ubah/{{$row->id}}"class="btn btn-warning">Edit</a>
                        <a href="admin/hapus/{{$row->id}}" class="btn btn-danger">Delete</a>
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