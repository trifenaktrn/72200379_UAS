@extends('layouts.main')
@section('title', 'Form User Baru')
@section('content')
<div class="container-fluid mt-4 rounded">
    <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIK User</label>
            <div class="col-sm-5">
                <input type="number" name="nik_user" class="form-control" placeholder="NIK User" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama User</label>
            <div class="col-sm-5">
                <input type="text" name="nama_user" class="form-control" placeholder="Nama User" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-5">
                <input type="text" name="no_hp" class="form-control" placeholder="No. Telepon" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email Pengguna</label>
            <div class="col-sm-5">
                <input type="email" name="email" class="form-control" placeholder="Email Pengguna" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password Pengguna</label>
            <div class="col-sm-5">
                <input type="password" name="password" class="form-control" placeholder="Password Pengguna" required>
            </div>
        </div>

        <div class="form-group pt-4">
            <input type="submit" value="Save" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection

