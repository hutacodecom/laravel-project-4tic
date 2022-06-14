@extends('layouts.app')
@section('title', 'Home')

@section('content')
      <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-header">
                Data All Users
                </div>
                <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $index => $user)
                                <tr>
                                    <th scope="row">{{ ++$index }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
      </div>
@endsection