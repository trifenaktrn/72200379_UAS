@extends('layouts.main')
@section('title', 'Update User')
@section('content')
<div class="container-fluid mt-4 rounded">
    <form action="/user/simpanupdate_user/{{ $user->id }}" method="POST" class="pt-2 pb-2">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK User</label>
            <div class="col-sm-5">
                <input type="number" name="nik_user" class="form-control" value="{{ $user->nik_user }}" readonly required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama User</label>
            <div class="col-sm-5">
                <input type="text" name="nama_user" class="form-control" value="{{ $user->nama_user }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-5">
                <input type="text" name="no_hp" class="form-control" value="{{ $user->no_hp }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email Pengguna</label>
            <div class="col-sm-5">
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password Pengguna</label>
            <div class="col-sm-5">
                <input type="password" name="password" class="form-control" value="{{ $user->password }}" required>
            </div>
        </div>

        <div class="form-group pt-4">
            <input type="submit" value="Save" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection

