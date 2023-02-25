<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use App\Models\publisher;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.allarticle',[
            'articles' => article::filter(request(['search', 'publisher']))->paginate(6),
            'publishers' => publisher::all()
        ]);
    }

    public function detail(article $article)
    {
        return view('article.detailarticle', [
            'article' => $article
        ]);
    }

    public function edit(article $article)
    {
        return view('article.editarticle', [
            'publishers' => publisher::all(),
            'article' => $article
        ]);
    }

    public function update(Request $request, article $article){
        $validateData = $request->validate([
            'tittle' => 'required|max:200',
            'abstract' => 'required|max:300',
            'description' => 'required',
            'article_date' => 'required',
            'author' => 'required',
            'publisher_id' => 'required',
        ]);

        article::where('id', $article->id)
            ->update($validateData);
        return redirect('/article/allarticle')-> with('success', 'Data Berhasil Diubah');
    }

    public function delete(article $article)
    {
        article::destroy($article->id);
        return redirect('/article/allarticle')-> with('success', 'Data Berhasil Dihapus');
    }

    public function create(){
        return view('article.createarticle', [
            'publisher' => publisher::all()
        ]);
    }

    public function publish(Request $request){
        $validateData = $request->validate([
            'publisher_id' => 'required',
            'tittle' => 'required|max:200',
            'abstract' => 'required|max:300',
            'description' => 'required',
            'author' => 'required',
            'article_date' => 'required',
        ]);

        article::create($validateData);
        return redirect('/article/allarticle')-> with('success', 'Data Berhasil Ditambahkan');
    }

}
