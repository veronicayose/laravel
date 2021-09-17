<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Book;
Use Illuminate\support\facades\view;

class BookController extends Controller
{
    public function index(){
        return "Ini adalah index page Book";
    }

    public function viewJudul($judul){
        //return "Judul buku yang Anda baca adalah: ".$judul;
        $data = array('judul' => $judul);
        return View::make('book.Book',$data);
    }
}
