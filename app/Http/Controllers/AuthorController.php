<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::orderBy('author_id','desc')->paginate(5);
        return view('author/index', compact('author'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('author/create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        
        Author::create($request->post());

        return redirect()->route('author')->with('success','Author has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Author  $Author
    * @return \Illuminate\Http\Response
    */
    public function show(Author $Author)
    {
        return view('companies.show',compact('Author'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Author  $Author
    * @return \Illuminate\Http\Response
    */
    public function editAuthor(Author $author)
    {
        return view('author/edit',compact('author'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Author  $Author
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Author $Author)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);
        
        $Author->fill($request->post())->save();

        return redirect()->route('author')->with('success','Author Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Author  $Author
    * @return \Illuminate\Http\Response
    */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author')->with('success','Author has been deleted successfully');
    }
}
