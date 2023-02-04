@extends('dashboard.layout.main')
@section('content')
                    <div  class="col-lg-8">
                    <div class="container-edit">
                        <div class="form-edit">
                            <div class="logo-edit">
                                <img src="assets/logo_transparent.png" alt="" />
                            </div>
                        <form>
                            @csrf
                            <fieldset>
                                    <legend>Detail Data</legend>
                                    <p>
                                      <label>Judul :</label>
                                      <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Judul Artikel" value= "{{old('tittle', $article->tittle)}}" required readonly>
                                    </p>
                                    <p>
                                      <label>Abstrak :</label>
                                      <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Abstrak Artikel" value= "{{old('abstract', $article->abstract)}}" required readonly>
                                    </p>
                                    <p>
                                      <label>Isi Artikel :</label>
                                      <textarea type="text" class="form-control" id="description" name="description" placeholder="Isi Artikel.." required cols="30" rows="10" readonly>{{$article['description']}}</textarea>
                                    </p>
                                    <p>
                                      <label>Penulis :</label>
                                      <input type="text" class="form-control" id="author" name="author" placeholder="Penulis Artikel" value= "{{old('author', $article->author)}}" required readonly>
                                    <p>
                                      <label>Dipublikasikan :</label>
                                      <p class="card-text"><a href="/dashboard/publisher/detail/{{$article->publisher->name_publisher}}" style="text-decoration: none; color: black; 
                                      ">dipubliskasikan oleh: <b>{{$article->publisher->name_publisher}}</b> | {{$article->article_date}}</a></p>
                                    </p>
                                    <br>
                                    <a href="/dashboard/article/allarticle" class="btn btn-primary mt-3">Kembali</a>
                                    </fieldset>
                        </form>
                    </div>
                </div>
            </div>
    
@endsection   