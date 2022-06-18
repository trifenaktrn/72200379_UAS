@extends('layouts.main')
@section('title', 'Update Mahasiswa Baru')
@section('content')
    <div class="container-fluid mt-4 rounded">
        @php 
            $bdg_minat = explode(',', $mahasiswa->bdg_minat);
        @endphp
        <form action="/mahasiswa/simpanupdate/{{ $mahasiswa->id }}" method="POST" class="pt-2 pb-2">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Masukkan NIM</label>
                <div class="col-sm-5">
                    <input type="number" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" readonly required>
                </div>
            </div>
            <!-- nim->uniq(); -->

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Masukkan Nama</label>
                <div class="col-sm-5">
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" required>
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                    <input type="radio" name="gender" value="Laki-laki" {{ $mahasiswa->gender == 'Laki-laki' ? 'checked':'' }} class="form-check-input">
                    <label>
                        Laki-laki
                    </label>
                    </div>
                    <div class="form-check">
                    <input type="radio" name="gender" value="Perempuan" {{ $mahasiswa->gender == 'Perempuan' ? 'checked':'' }} class="form-check-input">
                    <label>
                        Perempuan
                    </label>
                    </div>
                </div>
                </div>
            </fieldset>
 
            <div class="form-group">
            <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Pilih Jurusan</legend>
            <div class="col-sm-5">
                <select name="jurusan" class="form-control">
                    <option value="0">Pilih Jurusan Anda</option>
                    <option value="Sistem Informasi" {{ $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
                    <option value="Informatika" {{ $mahasiswa->jurusan == 'Informatika' ? 'selected':'' }}>Informatika</option>
                    <option value="Arsitektur" {{ $mahasiswa->jurusan == 'Arsitektur' ? 'selected':'' }}>Arsitektur</option>
                    <option value="Desain Produk" {{ $mahasiswa->jurusan == 'Desain Produk' ? 'selected':'' }}>Desain Produk</option>
                </select>
            </div>
            </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Bidang Minat</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                    <input type="checkbox" name="bdg_minat[]" value="Teknologi dan Rekayasa" {{ in_array('Teknologi dan Rekayasa', $bdg_minat) ? 'checked':'' }} class="form-check-input">
                    <label>
                        Teknologi dan Rekayasa
                    </label>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" name="bdg_minat[]" value="Kesehatan" {{ in_array('Kesehatan', $bdg_minat) ? 'checked':'' }} class="form-check-input">
                    <label>
                        Kesehatan
                    </label>
                    </div>
                    <div class="form-check">
                    <input type="checkbox" name="bdg_minat[]" value="Humaniora" {{ in_array('Humaniora', $bdg_minat) ? 'checked':'' }} class="form-check-input">
                    <label>
                        Humaniora
                    </label>
                    </div>
                </div>
                </div>
            </fieldset>

            <div class="form-group pt-4">
                <input type="submit" value="Save" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
@endsection
