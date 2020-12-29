@extends('layout.main')

@section('title', 'Detail Pegawai')
    


@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">  Detail Pegawai </h1>
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-tittle">Nama: {{$employee->nama}}</h5>
                        <h6 class="card-subtittle mb-2 text-muted">Nomor Pokok Pekerjaan : {{$employee->npp}}</h6>
                        <p class="card-text">Jenis kelamin : {{$employee->jenis_kelamin}}</p>
                        <p class="card-text">Kota asal: {{$employee->asal}}</p>
                       
                        <a href="{{$employee->id}}/edit" class="btn btn-primary"> Edit</a>
                        <form action="{{$employee->id }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"> Delete </button>
                            </form>
                        
                        <a href="/" class="card-link"> Kembali </a>
                    
                    </div>
                </div>
    </div>
</div>
@endsection