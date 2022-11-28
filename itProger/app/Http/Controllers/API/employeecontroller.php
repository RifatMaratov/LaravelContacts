<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\employees;
use Illuminate\Http\Request;

class employeecontroller extends Controller
{
    public function index() {
        $emp = employees::all();

        return response()->json([
            'success' => true,
            'message' => $emp
        ]);
    }
}
