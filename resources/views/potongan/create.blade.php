
@extends('layouts/app')

@section('title', 'Tambah Data potongan')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>
    <div class="card" style="width:60% margin=bottom 100px;">
      <div class="card-body">
          <form  action="{{route('potongan.store')}}" method="post">
              @csrf 
              <div class="form-group">
                  <label for="nik">Nama Potongan</label>
                  <input type="text" name="potongan" class="form form-control">
              </div>
              <br>
              <div class="form-group">
                  <label for="nama">Jumlah Potongan</label>
                  <input type="number" name="jumlah" class="form form-control">
              </div>
              <br> 
              <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
              <a href="/potongan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>
          </form>
      </div>
  </div>
</div>    
@endsection
 