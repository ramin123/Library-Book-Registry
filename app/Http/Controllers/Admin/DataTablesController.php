<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datatable;
use Yajra\DataTables\DataTables;

class DataTablesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.examples.datatables');
    }

    public function data()
    {
        $tables = Datatable::select(['id', 'firstname', 'lastname', 'email']);

        return DataTables::of($tables)
            ->make(true);
    }
}
