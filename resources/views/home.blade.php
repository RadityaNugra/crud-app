@extends('template')
@section('content')
<div class="container">
    <h3 class="text-center">Data Siswa</h3>
    <a href="/index/tambah"><button class="btn btn-success mb-5">Tambah Data</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">NIPD</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Kelas</th>
        <th scope="col">Alamat</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td> {{ $loop->iteration}} </td>
            <td> {{ $item->NIPD}} </td>
            <td> {{ $item->nama}} </td>
            <td> {{ $item->jenis_kelamin}} </td>
            <td> {{ $item->kelas}} </td>
            <td> {{ $item->alamat}} </td>
            <td>
               <a href="/index/edit/{{ $item->id }} "> <button type="button" class="btn btn-primary">Edit</button></a>

               <form action="{{url('index/'.$item->id) }}" method="POST"  class="d-inline" onsubmit="return confirm('yakin mau hapus?')">
                   @method('delete')
                   @csrf
                   <button class="btn btn-danger">hapus</button>
               </form>

            </td>
        </tr>
        @endforeach
@endsection
