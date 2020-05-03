@extends('layouts.master')

@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="/profile">Profile <span class="sr-only">(current)</span></a>
        </div>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

<div class="row">
    <div class="col-6">

        <h1>Halaman Register</h1>
    </div>
    <div class="col-6">
        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
            data-target="#exampleModal">
            Tambah Data
        </button>

    </div>


    <table class="table table-hover">
        <tr>
            <th scope="col">Nama Depan</th>
            <th scope="col">Nama Belakang</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach ( $data_register as $register)
        <tr>
            <td>{{ $register->nama_depan }}</td>
            <td>{{ $register->nama_belakang }}</td>
            <td>{{ $register->jenis_kelamin }}</td>
            <td>{{ $register->agama }}</td>
            <td>{{ $register->alamat }}</td>
            <td><a href="/register/{{$register->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="/register/{{$register->id}}/delete" class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah anda yakin ingin menghapusnya')">Delete</a></td>
            </td>
        </tr>
        @endforeach
    </table>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/register/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Depan</label>
                        <input name="nama_depan" text="Nama Depan" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Belakang</label>
                        <input name="nama_belakang" text="Nama Belakang" type="text" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <div class="form-group">
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <input name="agama" text="Agama" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Agama">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <div class="form-group">
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                                    rows="3"></textarea>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @endsection