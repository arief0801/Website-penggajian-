
@extends('dashboard/index')

@section('title', 'Tambah Data potongan')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div>
    <div class="card" style="width:60% margin=bottom 100px;">
      <div class="card-body">
          <form  action="{{route('absensi.store')}}" method="post">
              @csrf 
              <div class="form-group">
                <label for="bulan">Bulan</label>
                <select name="bulan"  class="form form-control">  
                    <option value="01">Januari</option>
                    <option value="02">Febuary</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                <select>      
              </div>
             <br>
             <div class="form-group">
                 <label for="">Hadir</label>
                 <input type="number" name="hadir" class="form form-control">
             </div>
             <br>
             <div class="form-group">
                  <label for="">Sakit</label>
                  <input type="number" name="sakit" class="form form-control">
             </div>
             <br>
             <div class="form-group">
                  <label for="">Alpa</label>
                  <input type="number" name="alpa" class="form form-control">
            </div>
            <br>

              <button type="submit" class="btn btn-success mt-5" style="margin-bottom: 70px">Simpan</button>
              <a href="/potongan" class="btn btn-danger mt-5" style="margin-bottom: 70px">Batal</a>
          </form>
      </div>
  </div>
</div>    
@endsection
 