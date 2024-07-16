<?php

namespace App\Http\Controllers;
use App\Models\Tentangkami;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        
        return view('tentangkami');
    }
}
