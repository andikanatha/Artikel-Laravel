@extends('dashboard.layout.main')

@section('content')
                    <center><h1 class="mt-3">Tambah Article</h1></center>
                    <div class="container-edit">
                        <div class="form-edit">
                            <div class="logo-edit">
                                <img src="assets/logo_transparent.png" alt="" />
                            </div>
                                <form method="post" action="/dashboard/article/add">
                                @csrf
                                <fieldset>
                                    <legend>New Data</legend>
                                    <p>
                                      <label>Judul :</label>
                                      <input type="text" class="form-control" id="tittle" name="tittle" placeholder="Judul Artikel" value= "{{old('tittle')}}" required>
                                    </p>
                                    <p>
                                      <label>Abstrak :</label>
                                      <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Judul Artikel" value= "{{old('abstract')}}" required>
                                    </p>
                                    <p>
                                      <label>Isi Artikel :</label>
                                      <textarea type="text" class="form-control" id="description" name="description" placeholder="Isi Artikel.." value= "{{old('description')}}" required cols="30" rows="10"></textarea>
                                    </p>
                                    <p>
                                      <label>Penulis :</label>
                                      <input type="text" class="form-control" id="author" name="author" placeholder="Penulis Artikel" value= "{{old('author')}}" required>
                                    </p>
                                    <p>
                                      <label>Penerbit :</label>
                                      <select name="publisher_id" id="publisher_id" class="form-control" required>
                                        <option value="">Pilih Penerbit</option>
                                        @foreach($publisher as $publish)
                                        <option name="publisher_id" value="{{$publish->id}}">{{$publish->name}}</option>
                                        @endforeach
                                      </select>
                                    <p>
                                      <label>Tanggal :</label>
                                      <input type="date" class="form-control" id="article_date" name="article_date" placeholder="Tanggal Buku" value= "{{old('article_date')}}" required>
                                    </p>
                                    <div class="btn-send">
                                      <p>
                                        <input type="submit" name="submit" value="Tambah data" />
                                      </p>
                                    </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

@endsection   