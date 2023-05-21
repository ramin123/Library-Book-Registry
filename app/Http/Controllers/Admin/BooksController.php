<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\bookrequest;
use App\Models\Books;
use App\Models\Authors;
use App\Models\Genre;
// use DOMDocument;
// use Intervention\Image\Facades\Image;
// use App\Repositories\BookRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Log;
class BooksController extends Controller
{
    public function index()
    {
        $book = DB::table('books')
        ->select('*','authors.name AS authorName','genres.name AS genreName','books.id AS id')
        ->join('authors','authors.id','=','books.author_id')
        ->join('genres','genres.id','=','books.genre_id')
        ->get();
        // Show the page
        return view('admin.book.index', compact('book'));
    }

    public function list()
    {
        $book = DB::table('books')
        ->select('*','authors.name AS authorName','genres.name AS genreName')
        ->join('authors','authors.id','=','books.author_id')
        ->join('genres','genres.id','=','books.genre_id')
        ->orderBy('books.title','asc')
        ->get();
        // Show the page
        return view('admin.book.list', compact('book'));
    }
    public function create()
    {   
        $author = Authors::all();
        $genre = Genre::all();
        return view('admin.book.create',compact('author','genre'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'publication_year' => 'required',
            'type' => 'required',
            'author_id' => 'required',
            'genre_id' => 'required',
        ]);
        
        if (Books::where('title', '=', $request->title)->exists()) {
            
            return redirect('admin/books')->with('error','title is in databases.');
        }
        Books::create($request->post());
        $log = array(
            'message' => 'Insert book information !',
            'data' => json_encode($request->all())
        );
        Log::create($log);
        
        return redirect('admin/books')->with('success','Book has been created successfully.');    
        
        
        
    }

    public function edit(Books $book)
    {   
        $author = Authors::all();
        $genre = Genre::all();
        return view('admin.book.edit', compact('book','author','genre'));
    }

    public function authorList(Books $book)
    {   
        $author = DB::table('authors')
        ->select('authors.name', DB::raw("COUNT(books.id) as num_books"))
        ->join('books','authors.id','=','books.author_id')
        ->groupBy('authors.name')
        ->get();
        return view('admin.book.authorList', compact('author'));
    }
    //Update
    public function update(Request $request, Books $book)
    {
        if ($book->update($request->post())) {
            return redirect('admin/books')->with('success', trans('news/message.success.update'));
        }
        return Redirect::route('admin/books')->withInput()->with('error', trans('news/message.error.update'));

    
    }


    public function getModalDelete(Books $book)
    {
        $model = 'book';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('admin.books.delete', ['id' => $book->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('news/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    public function destroy(Books $book)
    {
        
        $book_data = DB::table('books')
        ->select('*')
        ->where('id','=',$book->id)
        ->get();
        $log = array(
            'message' => 'Delete book!',
            'data' => json_encode($book_data)
        );
        
        if ($book->delete()) {
            Log::create($log);
            return redirect('admin/books')->with('success', trans('news/message.success.delete'));
        }
        return Redirect::route('admin/books')->withInput()->with('error', trans('news/message.error.delete'));

    
    }


    

    
}
