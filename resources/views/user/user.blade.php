@extends('layout/tampilan')

@section('title','Laporan ilai')

@section('content')

<br><br><br>
<div class="countainer">
<table class="table table-striped table-dark">
<thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
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
    <tr>
      <th scope="row">1</th>
      <td>Stepano</td>
      <td>Ramalobibit</td>
      <td>1234</td>
      <td>081234</td>
      <td>#</td>
      <td>ramalo1234</td>
      <td>Karangan</td>
      <td>Pontianak</td>
      <td>Kalimantan Barat</td>
      <td>1995-10-01</td>
      <td>ramalo@gmail.com</td>
    </tr>
@foreach($users as $user)
    <tr>
      <th scope="">1</th>
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
    </tr>
    </tbody>
@endforeach
</table>
</div>