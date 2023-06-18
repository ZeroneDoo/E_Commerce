<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewHome()
    {
        $datas = Barang::all();
        return view('backend.admin', [
            "datas" => $datas
        ]);
    }
    public function viewBarang()
    {
        return view('backend.add_item');
    }
    public function postBarang(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $imageName = time().".".$request->gambar->extension();

        $request->gambar->storeAs('public/images', $imageName);

        $data = Barang::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $imageName
        ]);
        return redirect('admin');
    }

    public function editBarang($id)
    {
        $datas = Barang::find($id);

        return view('backend.edit_item', [
            "data" => $datas
        ]);
    }

    public function putBarang(Request $request, $id)
    {
        $update = Barang::find($id);


        $data = [
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ];

        if(isset($request->gambar)){
            $imageName = time().".".$request->gambar->extension();
            $request->gambar->storeAs('public/images', $imageName);
            $data['gambar'] = $imageName;
        }

        $update->update($data);
        return redirect('admin');
    }

    public function deleteBarang($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect("/admin");
    }
}
