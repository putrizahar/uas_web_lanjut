@extends('main')
<div class="container card" style="margin-top: 5%" >
    <form action="/edit/{{ $pasien->id }}" method="POST">
        @csrf
        <h1 class="m-5">Edit Data</h1>
        <hr>

        <div class="form-floating m-3">
            <input type="string" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $pasien->nama }}">
            @error('nama')
            <span class="invalid-feedback">
                <p>{{ $message }}</p>
            </span>                
            @enderror
            <label for="nama">Nama Pasien</label>
        </div>
        <div class="form-floating m-3">
            <input type="string" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ $pasien->alamat }}">
            @error('alamat')
            <span class="invalid-feedback">
                <p>{{ $message }}</p>
            </span>                
            @enderror
            <label for="alamat">Alamat Pasien</label>
        </div>

        <button type="submit" class="btn btn-success m-2">Edit Pasien</button>
    </form>
</div>