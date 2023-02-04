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
                <th scope="col">Article</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $publisher)
                <tr>
                    <th scope="row"><?= $publisher['id']; ?></th>
                                <td><?= $publisher['name']; ?></td>
                                <td><?= $publisher['name_publisher']; ?></td>
                                <td><?= $publisher['email']; ?></td>
                                <td><?= $publisher['alamat']; ?></td>
                                <td><?= $publisher['age']; ?></td>
                                <td>
                                    <?php foreach($publisher->article as $article): ?>
                                        <!-- <li style="text-align: left;"><a href="/article/detailarticle/{{$article->tittle}}"><?= $article->tittle; ?></a></li> -->
                                        <li style="text-align: left;"><?= $article->tittle; ?></li>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-info" href="/dashboard/publisher/detailpublisher/{{$publisher->id}}">Detail</a>
                                </td>
                </tr>
            <?php endforeach; ?>
    </tbody>
</table>        
</div>

@endsection