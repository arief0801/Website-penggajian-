@extends('layouts/app')

@section('title', 'Data Karyawan')

@section('container')
    <center>
        <h1 class="mt-5 mb-5"> Data Jabatan </h1>
    </center>


<form method="post" action="{{route('jabatan.update',$jabatan->id)}}">
  @csrf
  @method('put')
    <div class="form-group">
        <label for="nama">Nama Karyawan</label>
        <input type="text" class="form=control" name="nama" value="{{$jabatan->}}">
    </div>
    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <input type="text" class="form=control" name="jabatan" value="{{$jabatan->}}">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @endsection