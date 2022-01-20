
@extends('layouts/app')

@section('title', 'Tambah Data karyawan')

@section('container')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>
    <div class="card" style="width:60% margin=bottom 100px;">
        <div class="card-body">
            <form  action="{{route('jabatan.store')}}" method="post">
                @csrf 
                <div class="form-group"  name="nama" class="form form-control">
                    <label for="nama" > Pilih Jabatan  </label>
                        <select name="" id="">
                            <option value="">Direktur Operasional</option>
                            <option value="">Sekertaris</option>
                            <option value="">Bendahara</option>
                        </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Tunjangan Transportasi</label>
                    <input type="" name="" class="form form-control">  
                </div>
                <br>
                <div class="form-group" style="">
                    <label for="">Tunjangan Makan</label>
                    <input type="text" name="" class="form form-control">
                </div>
                <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
                <br>
                <a href="/karyawan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>--}}
            </form>
        </div>
    </div>
</div>    
@endsection
 