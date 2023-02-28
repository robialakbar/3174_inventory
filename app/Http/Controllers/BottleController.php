<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use Illuminate\Http\Request;

class BottleController extends Controller
{
    public function create()
    {
        return view('create_bottle', [
            'title' => 'Create Bottle'
        ]);
    }
}
