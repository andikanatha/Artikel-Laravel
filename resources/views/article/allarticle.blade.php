@extends('layout.main')

@section('content')
                    @if(session() -> has('success'))
                        <div class="alert alert-success col-lg 12" role="alert">
                            {{session() -> get('success')}}
                        </div>
                    @endif    

                     <!-- Artikel -->
        <div id="page-artikel">
            <div class="artikel">
                <div class="text-title">
                    <h1>Artikel</h1>
                    <p>Artikel Terbaru Di Perweb</p>
                    {{-- <div class="btn-add">
                        <a href="/article/createarticle">Tambah Artikel</a>
                    </div> --}}
                </div>
                <form>
                <div class="col-md-30">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search"
                        value="{{ request()->input('search') }}">
                        <button class="btn btn-info" type="submit">Search</button>
                    </div>
                </div>
            </form>
                <div class="column-artikel">
                @foreach ($articles as $article)
                    <div class="card">
                        <div class="card-content">
                            <h3><a href="/article/detailarticle/{{$article->tittle}}" style="text-decoration: none;color: black; font-weight: bold; font-size: 20px;">{{$article->tittle}}</a></h3>
                            <h5><a href="/article/detailarticle/{{$article->publisher_id}}" style="font-weight: normal; color:black; ">{{$article->description}}</a></h5>
                            <div class="edit-tidakTertarik">
                            <form action="/article/delete/{{$article->id}}" method="post">
                                        @method('delete')
                                        @csrf
                                        {{-- <div class="btn-tidakTertarik"> --}}
                                        {{-- <button onClick="return confirm('Apakah Kamu yakin? ')" >Hapus</button> --}}
                                        {{-- </div> --}}
                                        </form>
                               <div class="edit">
                                {{-- <a href="/article/editarticle/{{$article->id}}"><i title="Edit Artikel" class="uil uil-edit"></i></a> --}}
                               </div>
                              </div>
                        </div>
                    </div>
                 
                    @endforeach
                    
                </div>
                <div>
                    {{ $articles->links() }}
                </div>
            </div>
        </div>
        <!-- end artikel -->
        
@endsection   