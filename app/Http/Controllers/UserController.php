<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewMain () {
        $datas = Barang::all();
        return view('frontend.Homepage', compact('datas'));
    }
}
