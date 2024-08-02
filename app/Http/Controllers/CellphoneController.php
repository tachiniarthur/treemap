<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cellphone;

class CellphoneController extends Controller
{
    public function index()
    {
        $cellphones = Cellphone::all();
        return view('cellphones.index', compact('cellphones'));
    }
}
