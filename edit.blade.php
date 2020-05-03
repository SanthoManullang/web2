@extends('layouts.master')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="welcome">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<h1>Edit Data Anda</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <form action="/register/{{$register->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Depan</label>
                <input name="nama_depan" text="Nama Depan" type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$register->nama_depan}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Belakang</label>
                <input name="nama_belakang" text="Nama Belakang" type="text" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang"
                    value="{{$register->nama_belakang}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <div class="form-group">
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($register->jenis_kelamin=='L') selected @endif>Laki-Laki</option>
                        <option value="P" @if($register->jenis_kelamin=='P') selected @endif>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Agama</label>
                    <input name="agama" text="Agama" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Agama" value="{{$register->agama}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                        rows="3">{{$register->alamat}}</textarea>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
        </form>
    </div>
</div>

@endsection