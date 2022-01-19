
@extends('layouts/app')

@section('title', 'Tambah Data karyawan')

@section('container')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>
    <div class="card" style="width:60% margin=bottom 100px;">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nama Karyawan</label>
                    <input type="text" name="" class="form form-control">
                    
                </div>
                <br>
                <div class="form-group">
                    <label for="">Gaji Pokok</label>
                    <input type="varchar" name="" class="form form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tunjangan Transportasi</label>
                    <input type="varchar" name="" class="form form-control">  
                </div>
                <br>
                <div class="form-group" style="">
                    <label for="">Tunjangan Makan</label>
                    <input type="text" name="" class="form form-control">
                </div>
                <br>

                <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
                <a href="/karyawan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>
            </form>
        </div>
    </div>
</div>    
@endsection
 