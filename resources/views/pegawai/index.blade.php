@extends('layout.main')

@section('title', 'Daftar Pegawai')
    


@section('container')
    
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">    Data Pegawai </h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"> #</th>

                        <th scope="col"> NPP </th>
                        <th scope="col"> Nama </th>
                        <th scope="col"> Usia </th>
                        <th scope="col"> Asal </th>
                        <th scope="col"> Jenis Kelamin </th>
                        <th scope="col"> Aksi </th>
                    </tr>    
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    <tr>
                        
                        <td scope="row"></td>
                        
                        <td> {{$employee->npp}} </td>
                        <td> {{$employee->nama}}</td>
                        <td> {{$employee->usia}} </td>
                        <td> {{$employee->asal}}</td>
                        <td> {{$employee->jenis_kelamin}}</td>
                        <td>
                            <a href=""  class="badge badge-success">edit</a>
                            <a href=""  class="badge badge-danger">delete</a>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection