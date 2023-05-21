<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datatable;
use Illuminate\Http\Request;
use Validator;
use Yajra\DataTables\DataTables;

class EditableDataTablesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.examples.editable_table');
    }

    public function data()
    {
        $tables = Datatable::get(['id','firstname', 'lastname','points','notes']);

        return DataTables::of($tables)
            ->addColumn('edit', '<a class="edit" href="javascript:;">Edit</a>')
            ->addColumn('delete', '<a class="delete" href="#" data-target="#deleteConfirmModal" data-toggle="modal">Delete</a>')
            ->rawColumns(['edit','delete'])
            ->make(true);
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            Datatable::create($request->except('_token'));
        }
    }

    public function update(Request $request, $id)
    {
        $rules = [

            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'points' => 'required|integer',
            'notes' => 'required',
        ];

        // Create a new validator instance from our validation rules
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, we'll exit the operation now.
        if ($validator->fails()) {
            // Ooops.. something went wrong
            return $validator->errors()->all();
        }

        $table = Datatable::find($id);

        $table->update($request->except('_token'));
        return 'success';
    }

    public function destroy($id)
    {
        $row = Datatable::find($id);
        $row->delete();
        return $row->id;
    }
}
