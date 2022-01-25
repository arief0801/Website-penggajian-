@extends('layouts/app')

@section('title', 'Data Karyawan')

@section('content')
    <center>
        <h1 class="mt-5 mb-5"> Data Karyawan </h1>
    </center>


<form method="POST" action="{{route('karyawan.update',$karyawan->id)}}">
  @csrf
  @method('put')
  <div class="card" style="width:60% margin=bottom 100px;">
    <div class="card-body">
        <form  action="{{route('karyawan.store')}}" method="post">
            @csrf 
            <div class="form-group">
                <label for="nik">NIK</label>
                <input type="number" name="nik" class="form form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="nama">Nama Pegawai</label>
                <input type="text" name="nama" class="form form-control">
            </div>
            <br> 
            <div class="form-group">
                <label for="">Jabatan</label>
                <input type="varchar" name="jabatan" class="form form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="">Nomor Rekening</label>
                <input type="number" name="no_rekening" class="form form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="">Nomor Telepon</label>
                <input type="number" name="no_telepon" class="form form-control">
            </div>
            <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
            {{--<div class="form-group">
                <label for="">Tunjangan Transportasi</label>
                <input type="varchar" name="" class="form form-control">  
            </div>
            <br>
            <div class="form-group" style="">
                <label for="">Tunjangan Makan</label>
                <input type="text" name="" class="form form-control">
            </div>
            <br>

            
            <a href="/karyawan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>--}}
        </form>
    </div>
</div>
  @endsection