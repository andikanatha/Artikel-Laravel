@extends('layout.main')

@section('content')
                    <center><h1 class="mt-3">Edit Artikel</h1></center>
                    <div  class="col-lg-8">
                    <div class="container-edit">
                        <div class="form-edit">
                            <div class="logo-edit">
                                <img src="assets/logo_transparent.png" alt="" />
                            </div>
                        <form method="post" action="/dashboard/article/update/{{$article->id}}">
                            @csrf
                            <fieldset>
                                    <legend>Edit Data</legend>
                                    <p>
                                      <label>Judul :</label>
                                      <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Judul Artikel" value= "{{old('tittle', $article->tittle)}}" required>
                                    </p>
                                    <p>
                                      <label>Penulis :</label>
                                      <input type="text" class="form-control" id="author" name="author" placeholder="Penulis Artikel" value= "{{old('author', $article->author)}}" required>
                                    <p>
                                    <p>
                                      <label>Abstrak :</label>
                                      <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Abstrak Artikel" value= "{{old('abstract', $article->abstract)}}" required>
                                    </p>
                                    <p>
                                      <label>Isi Artikel :</label>
                                      <textarea type="text" class="form-control" id="description" name="description" placeholder="Isi Artikel.." required cols="30" rows="10">{{$article['description']}}</textarea>
                                    </p>
                                    <p>
                                      <label>Penerbit :</label>
                                      <select name="publisher_id" id="publisher_id" class="form-control" required>
                                        {{-- <option value="{{old('article_author', $article->article_author)}}">Pilih Penerbit</option> --}}
                                        @foreach($publishers as $publisher)
                                        <option name="publisher_id" value="{{$publisher->id}}" {{ $publisher->id == $article->publisher_id ? 'selected' : '' }}>{{$publisher->name_publisher}}</option>
                                        @endforeach
                                      </select>
                                    </p>
                                    <p>
                                      <label>Tanggal :</label>
                                      <input type="date" class="form-control" id="article_date" name="article_date" placeholder="Release Buku" value= "{{old('article_date', $article->article_date)}}" required>
                                    </p>
                                    <div class="btn-send">
                                      <p>
                                        <input type="submit" name="submit" value="Edit data" />
                                      </p>
                                    </div>
                                    </fieldset>
                        </form>
                    </div>
                </div>
            </div>

@endsection   