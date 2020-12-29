@extends('layout.main')

@section('title', 'Form Tambah Data Pegawai')
    


@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">  Form Tambah Data Pegawai </h1>
            
            
            <form method="POST" action="/employees">

                @csrf   
                <div class="form-group">
                  <label for="npp">NPP</label>
                  <input type="text" class="form-control @error('npp') is-invalid @enderror" id="npp" placeholder="Masukkan Nomor Pokok Pegawai" name="npp" value="{{old('npp')}}>
                  
                    @error('npp')
                  <div class="invalid-feedback">
                    {{$message}} </div>
                    @enderror
                </div>


                <div class="form-group">
                  <label for="nama">nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
                    @error('nama')
                  <div class="invalid-feedback">
                    {{$message}}</div>
                    @enderror
                </div>


                <div class="form-group">
                  <label for="usia">usia</label>
                  <input type="text" class="form-control @error('usia') is-invalid @enderror" id="usia" placeholder="masukan usia" name="usia" value="{{old('usia')}}">
                    @error('usia')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                </div>


                <div class="form-group">
                    <label for="asal">asal</label>
                    <input type="text" class="form-control" id="asal" placeholder="Masukan Kota Asal" name="asal" value="{{old('asal')}}">
                </div>
                <div class="form-group">
                    Jenis Kelamin : 
                    <input type="radio" name="jenis_kelamin" value="pria" checked /> 
                    Pria
                <input type="radio" name="jenis_kelamin" value="wanita" /> 
                    Wanita
                </div>
                <button type="submit" class="btn btn-primary"> Tambah Data</button>

                
              </form>
                
    </div>
</div>
@endsection