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

    public function detail($id)
    {
        $data = Barang::find($id);

        return view('frontend.Detailpage', compact('data'));
    }

    public function cart(){
        return view('frontend.Cart');
    }
}
