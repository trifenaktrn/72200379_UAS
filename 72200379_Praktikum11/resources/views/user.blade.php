@extends('layouts.main')
@section('title', 'User')
@section('content')
<div class="card-header" style="background-color: #FFFFFF;">
    <a name="" class="btn btn-success" href="/user/formuser" role="button"><i class="bi bi-plus-square-fill"></i>
        Tambahkan Data </a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>

@if (session('alertcreate'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session('alertcreate') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif (session('alertupdate'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session('alertupdate') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif (session('alertdelete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session('alertdelete') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<table class="table table-hover table-bordered">
    <thead class="thead-dark text-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIK User</th>
            <th scope="col">Nama User</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $no => $d)
        <tr>
            <th scope="row">{{ $user->firstItem() + $no }}</th>
            <td>{{ $d->nik_user }}</td>
            <td>{{ $d->nama_user }}</td>
            <td>{{ $d->no_hp }}</td>
            <td>{{ $d->email }}</td>
            <td class="text-center">
                <a href="/user/updateuser/{{ $d->id }}" class="btn btn-warning"><i
                        class="bi bi-pencil-square"></i></a>
                <a href="/user/deleteuser/{{ $d->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<span class="float-right">{{ $user->links() }}</span>
@endsection