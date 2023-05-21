<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Requests\genrerequest;
use App\Models\Genre;
// use DOMDocument;
// use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = Genre::all();
        // Show the page
        return view('admin.genre.index', compact('genre'));
    }
    public function create()
    {
        return view('admin.genre.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        Genre::create($request->post());

        return redirect()->route('admin.genres')->with('success','Author has been created successfully.');
    }

    public function edit(Genre $genre)
    {
        return view('admin.genre.edit', compact('genre'));
    }

    //Update
    public function update(Request $request, Genre $genre)
    {
        
        if ($genre->update($request->post())) {
            return redirect('admin/genres')->with('success', trans('news/message.success.update'));
        }
        return Redirect::route('admin/genres')->withInput()->with('error', trans('news/message.error.update'));

    
    }


    public function getModalDelete(Genre $genre)
    {
        $model = 'genre';
        $confirm_route = $error = null;
        try {
            $confirm_route = route('admin.genres.delete', ['id' => $genre->id]);
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        } catch (RoleNotFoundException $e) {
            $error = trans('news/message.error.destroy', compact('id'));
            return view('admin.layouts.modal_confirmation', compact('error', 'model', 'confirm_route'));
        }
    }

    public function destroy(Genre $genre)
    {
        if ($genre->delete()) {
            return redirect('admin/genres')->with('success', trans('news/message.success.delete'));
        }
        return Redirect::route('admin/genres')->withInput()->with('error', trans('news/message.error.delete'));

    
    }


    public function data()
    {
        $genre = Genre::get(['id', 'name', 'created_at']);

        return DataTables::of($genre)
            ->editColumn(
                'created_at',
                function (Genre $createtime) {
                    return $createtime->created_at->diffForHumans();
                }
            )
            ->addColumn(
                'actions',
                function ($genre) {
                    $actions = '<a href=' . "sdfs" . '><i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view genre"></i></a>
                            <a href=' . route('admin.genres.edit', $genre->id) . '><i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="update genre"></i></a>';
                    $actions .= '<a href=' . route('admin.genres.confirm-delete', $genre->id) . ' data-toggle="modal" data-target="#delete_confirm" data-id="'.$genre->id.'"><i class="livicon" data-name="trash" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete genre" ></i></a>';
                    
                    return $actions;
                }
            )
            ->rawColumns(['actions'])
            ->make(true);
    }

    
}
