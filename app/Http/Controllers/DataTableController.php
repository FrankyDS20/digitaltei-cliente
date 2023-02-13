<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
class DataTableController extends Controller
{
    public function index()
    {
        return view('datatables.index');
    }

    public function data()
    {
        $data = DB::table('table_name')->select(['column1', 'column2', 'column3']);

        return Datatables::of($data)->make(true);
    }
}
