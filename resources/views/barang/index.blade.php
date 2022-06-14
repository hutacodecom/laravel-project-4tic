@extends('layouts.app')
@section('title', 'Barang')

@section('content')
<div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                <a href="#" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Dibuat</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $index => $item)
                                <tr>
                                    <th scope="row">{{ ++$index }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
      </div>
@endsection