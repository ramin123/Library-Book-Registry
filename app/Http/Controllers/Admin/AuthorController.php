<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\authorrequest;
use App\Models\Authors;
// use DOMDocument;
// use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $author = Authors::all();
        // Show the page
        return view('admin.author.index', compact('author'));
    }
    public function create()
    {
        return view('admin.author.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        Authors::create($request->post());

        return redirect()->route('admin.authors')->with('success','Author has been created successfully.');
    }

    public function edit(Authors $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    //Update
    public function update(Request $request, Authors $author)
    {
        
        if ($author->update($request->post())) {
            return redirect('admin/authors')->with('success', trans('news/message.success.update'));
        }
        return Redirect::route('admin/authors')->withInput()->with('error', trans('news/message.error.update'));

    
    }


    public function getModalDelete(Authors $author)
    {
        $model = 'author';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('admin.authors.delete', ['id' => $author->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('news/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    public function destroy(Authors $author)
    {
        if ($author->delete()) {
            return redirect('admin/authors')->with('success', trans('news/message.success.delete'));
        }
        return Redirect::route('admin/authors')->withInput()->with('error', trans('news/message.error.delete'));

    
    }


    public function data()
    {
        $author = Authors::get(['id', 'name', 'created_at']);

        return DataTables::of($author)
            ->editColumn(
                'created_at',
                function (Authors $createtime) {
                    return $createtime->created_at->diffForHumans();
                }
            )
            ->addColumn(
                'actions',
                function ($author) {
                    $actions = '<a href=' . "sdfs" . '><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view author"></i></a>
                            <a href=' . route('admin.authors.edit', $author->id) . '><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update author"></i></a>';
                    $actions .= '<a href=' . route('admin.authors.confirm-delete', $author->id) . ' data-toggle="modal" data-target="#delete_confirm" data-id="'.$author->id.'"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete author" ></i></a>';
                    
                    return $actions;
                }
            )
            ->rawColumns(['actions'])
            ->make(true);
    }

    
}
