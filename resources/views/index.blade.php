@extends('main')
<div class="container" style="margin-top: 4%">
    <h1 class="text-center">Data Pasien</h1>
    <div class="mb-3">
        <a href="{{ route('create') }}" class="btn btn-success">Tambah Data Pasien</a>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-info">
        {{ session()->get('message') }}    
    </div>
    @endif
    <table class="table table-success table-striped-columns">
        <tr>
            <th>Nama Pasien</th>
            <th>Alamat Pasien</th>
            <th>#############</th>
        </tr>
        @foreach ($pasien as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
                <a href="/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                <form action="/hapus/{{ $p->id }}" method="post" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $pasien->links() }}
</div>