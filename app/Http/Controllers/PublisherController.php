<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publisher;

class PublisherController extends Controller
{
    public function index(){
        return view('publisher.allpublisher', [
            'publishers' => Publisher::all()
        ]);
    }

    public function detail(publisher $publisher){
        return view('publisher.detail', [
            'publisher' => $publisher
        ]);
    }
}
