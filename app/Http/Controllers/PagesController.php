<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
use App\Comment;
class PagesController extends Controller
{
    public function index(){
        $books = Book::latest()->paginate(3);
        return view('welcome')->with('books',$books);
    }
    public function viewCategory($id){
        $category = Category::find($id);
        $books = $category->books;
        return view('partial/viewcategory')->with(['books'=>$books,'category'=>$category]);
 
    }

    public function viewBook($id){
        $book = Book::find($id);
        return view('partial/book')->with('book',$book);
    }
    public function addComment(Request $request, $id){
        $this->validate($request,[
            'comment'=>'required|max:200'
        ]);
        $book = Book::findOrFail($id);
        $coment = new Comment();
        $coment->user_id = auth()->user()->id;
        $coment->book_id = $book->id;
        $coment->comment = $request->input('comment');
        $coment->save();
        return redirect()->back();

    }
}
