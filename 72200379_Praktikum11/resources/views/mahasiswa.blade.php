@extends('layouts.main')
@section('title', 'Mahasiswa')
@section('content')
<div class="card-header" style="background-color: #FFFFFF;">
    <a name="" class="btn btn-success" href="/mahasiswa/form_mhs" role="button"><i class="bi bi-plus-square-fill"></i>
        Tambahkan Data </a>
    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
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
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Mahasiswa</th>
            <th scope="col">Gender</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Bidang Minat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mahasiswa as $no => $d)
        <tr>
            <th scope="row">{{ $mahasiswa->firstItem() + $no }}</th>
            <td>{{ $d->nim }}</td>
            <td>{{ $d->nama }}</td>
            <td>{{ $d->gender }}</td>
            <td>{{ $d->jurusan }}</td>
            <td>{{ $d->bdg_minat }}</td>
            <td>
                <a href="/mahasiswa/updatemhs/{{ $d->id }}" class="btn btn-warning"><i
                        class="bi bi-pencil-square"></i></a>
                <!-- <a href="/mahasiswa/deletemhs/{{ $d->id }}" class="btn btn-outline-primary"><i class="bi bi-trash"></i></a> -->
                <a href="#delete" type="button" class="btn btn-danger" data-toggle="modal"
                    data-target="#Modaldelete" onclick="$('#Modaldelete #formDel').attr('action', '/mahasiswa/deletemhs/{{ $d->id }}')"><i class="bi bi-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<span class="float-right">{{ $mahasiswa->links() }}</span>

<!-- Modal -->
<div class="modal fade" id="Modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Anda yakin akan menghapus data ini?
            </div>
            <div class="modal-footer">
                <form id="formDel" action="" method="POST">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection