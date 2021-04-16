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
    $book->title = 'Shreck 5';
    $book->isbn =  '';
    $book->pages = 100000000000000;
    $book->cost = 9999.0;
    $book->value = 99999.0;
    $book->current_condition = 0;
    
    $book->save();
    
  }
  public function update($id){
    $book = Book:: find($id);
    $book->cost = 24.0;
    
    $book->save();
    
  }
  public function destroy($id){
    //can name this function delete instead, this is a hard delete, not soft
    Book::find($id)->delete();
    
  }

}
