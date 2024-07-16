<?php

namespace App\Http\Controllers;
use App\Models\Machine;

use Illuminate\Http\Request;

class UserMachineController extends Controller
{
    public function index()
    {
        $machines = Machine::all();
        return view('tabelalatmesin', compact('machines'));
    }
    public function alatmesin()
    {
        $data = [
            'machines' => Machine::all(),
        ];

        return view('alatmesin', $data);
    }
    public function editalatmesin()
    {
        $data = [
            'machines' => Machine::all(),
        ];

        return view('editalatmesin', $data);
    }
    public function forum()
    {
        
        return view('forumdiskusi');
    }
    public function detail()
    {
        
        return view('detail.detailmesinbubut');
    }


}
