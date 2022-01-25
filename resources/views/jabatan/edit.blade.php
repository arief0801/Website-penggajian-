@extends('layouts/app')

@section('title', 'Data Karyawan')

@section('content')
    <center>
        <h1 class="mt-5 mb-5"> Data Jabatan </h1>
    </center>


<form method="post" action="{{route('jabatan.update',$jabatan->id)}}">
  @csrf
  @method('put')
   
    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <input type="text" class="form=control" name="jabatan" value="{{$jabatan->jabatan}}">
    </div>
    <div class="form-group">
      <label for="nama">Gaji Pokok</label>
      <input type="text" class="form=control" name="gaji_pokok" value="{{$jabatan->gaji_pokok}}">
    </div>
    <div class="form-group">
      <label for="nama">Tunjangan</label>
      <input type="text" class="form=control" name="tunjangan" value="{{$jabatan->tunjangan}}">
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-success" value="Simpan">
    </div>
  </form>
  @endsection