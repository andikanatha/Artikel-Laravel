<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
            $articles = DB::table('articles')->paginate(5);
            return view('dashboard.article.allarticle', compact('articles'));
    }

    public function detail(article $article)
    {
        return view('dashboard.article.detailarticle', [
            'article' => $article
        ]);
    }

    public function edit(article $article)
    {
        return view('dashboard.article.editarticle', [
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
        return redirect('/dashboard/article/allarticle')-> with('success', 'Data Berhasil Diubah');
    }

    public function delete(article $article)
    {
        article::destroy($article->id);
        return redirect('/dashboard/article/allarticle')-> with('success', 'Data Berhasil Dihapus');
    }

    public function create(){
        return view('dashboard.article.createarticle', [
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
        return redirect('/dashboard/article/allarticle')-> with('success', 'Data Berhasil Ditambahkan');
    }

    public function index_publisher(){
        $publishers = DB::table('publishers')->paginate(5);
        return view('dashboard.publisher.allpublisher', compact('publishers'));
    }

    public function detail_publisher(publisher $publisher){
        return view('dashboard.publisher.detail', [
            'publisher' => $publisher
        ]);
    }
}
