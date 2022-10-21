@extends('layout.master')
@section('content')

    <div class="container mt-4 text-center p-4 bg-secondary">
        <h1 class="display-4">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-12 col-md-8 m-auto">
                <ol class="list-group">
                    @forelse ($mahasiswas as $mahasiswa)
                        <li class="list-group-item">{{$mahasiswa}}</li>
                    @empty
                        <div class="alert alert-danger">
                            Tidak ada data..
                        </div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
@endsection