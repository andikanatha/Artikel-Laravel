@extends('dashboard.layout.main')

@section('content')
<div class="container-table">
        <div class="title-table">
            <h2>Daftar Author</h2>
        </div>
    <table class="styled-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Perusahaan</th>
                <th>Nama Author</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>Article</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($publishers as $publisher): ?>
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
                                    <button>
                                        <a href="/dashboard/publisher/detail/{{$publisher->name_publisher}}">Detail</a>
                                    </button>
                                 </td>
                            </tr>
                            <?php endforeach; ?>
        </tbody>
    </table>        
    </div>
    
@endsection   