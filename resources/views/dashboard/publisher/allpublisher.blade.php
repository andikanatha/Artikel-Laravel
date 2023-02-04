@extends('dashboard.layout.main')

@section('content')
    <h3 class="text-center mb-3">Daftar Publisher</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Nama Author</th>
                <th scope="col">Email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Umur</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @php
                $no = $publishers->firstItem();
            @endphp
            @foreach ($publishers as $publisher)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $publisher->name }}</td>
                    <td>{{ $publisher->name_publisher }}</td>
                    <td>{{ $publisher->email }}</td>
                    <td>{{ $publisher->alamat }}</td>
                    <td>{{ $publisher->age }}</td>
                    <td>
                    <a type="button" class="btn btn-info" href="/dashboard/publisher/detail/{{$publisher->name_publisher}}">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pull-left">
        {{ $publishers->links() }}
    </div>
    
@endsection