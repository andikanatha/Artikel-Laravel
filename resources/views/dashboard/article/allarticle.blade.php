@extends('dashboard.layout.main')

@section('content')
    <h3 class="text-center mb-3">Daftar Artikel</h3>
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif
    <a href="/dashboard/article/createarticle" class="btn btn-primary mb-3">Tambah Artikel</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Abstrak</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = $articles->firstItem();
            @endphp
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $article->author }}</td>
                    <td>{{ $article->abstract }}</td>
                    <td>
                    <a type="button" class="btn btn-info" href="/dashboard/article/detailarticle/{{$article->tittle}}">Detail</a>
                    <a type="button" class="btn btn-warning" href="/dashboard/article/editarticle/{{$article->id}}">Edit</a>
                    <form action="/dashboard/article/delete/{{$article->tittle}}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-left">
        {{ $articles->links() }}
    </div>
@endsection