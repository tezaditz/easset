<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['jmlbrg'] = DB::table('barang')->Count('id');

       return view('backend.dashboard.index' , $data);
    }

}
