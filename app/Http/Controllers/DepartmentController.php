<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    // Get all services
    public function index()
    {
        $services = DB::table('departments')->orderBy('name')->get();
        // SELECT * FROM departments order by name;
        
        return response()->json($services);
    }
}
