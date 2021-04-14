<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
 public function index(){
   return Book:all();
    //read
 }
  public function create(Request $request){
    //book create, save
    $book = new Book();
    $book->title = 'Clean Code';
    $book->isbn =  '';
    $book->pages = 200;
    $book->cost = 20.0;
    $book->value = 20.0;
    $book->current_condition = 0;
    
    $book->save();
    
  }
  public function update($id){
    $book = Book:: find($id);
    $book->cost = 24.0;
    
    $book->save();
    
  }
  public function destory($id){
    //can name this function delete instead, this is a hard delete, not soft
    Book::find($id)->delete();
    
  }

}
