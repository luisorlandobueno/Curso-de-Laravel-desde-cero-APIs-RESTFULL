<?php

namespace App\Http\Controllers;


use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index(){

        $books = Book::all();

        return view('books.index' ,['books' => $books ]);


    }


    



}