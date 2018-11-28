@extends('layout/tampilan')

@section('title','Tabel Daftar Peserta')

@section('content')

<br><br><br>
<div class="countainer">
<table class="table table-striped table-dark">
<thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">nama Belakang</th>
        <th scope="col">Nik</th>
        <th scope="col">phone</th>
        <th scope="col">photo</th>
        <th scope="col">password</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
        <th scope="col">Provinsi</th>
        <th scope="col">Lahir</th>
        <th scope="col">email</th>
        </tr>
</thead>
<tbody>
@foreach($users as $user)
    <tr>
      <th scope="col">1</th>
      <td>{{$user->first_name}}</td>
      <td>{{ $user->last_name }}</td>
      <td>{{ $user->nik }}</td>
      <td>{{ $user->phone }}</td>
      <td $photoName>{{ $user->photo }}</td>
      <td>{{ $user->password }}</td>
      <td>{{ $user->address }}</td>
      <td>{{ $user->city }}</td>
      <td>{{ $user->state }}</td>
      <td>{{ $user->birth_date }}</td>
      <td>{{ $user->email }}</td>
      <td>
        <!--method button -->
        <form action="/users/{{$user->id}}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <!--tombol button -->
        <button type="submit" class="btn btn-success" value="PUT">Edit Data</button>
       </form>
       </td>
    </tr>
@endforeach
</table>
</div>