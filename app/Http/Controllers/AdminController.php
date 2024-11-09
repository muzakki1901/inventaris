<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.beranda');
    }

    public function barang()
    {
        $data = barang::paginate(2);

        return view('admin.barang.index', compact('data'));
    }

    public function tambah_barang()
    {
        return view('admin.barang.tambah');
    }

    public function edit_barang($id)
    {
        $data = barang::find($id);
        return view('admin.barang.edit', compact('data'));
    }

    public function delete_barang($id)
    {
        barang::find($id)->delete();
        emotify('success', 'Berhasil Di Hapus');
        return back();
    }

    public function simpan_barang(Request $req)
    {
        barang:: create($req->all());
        notify()->success('Berhasil Disimpan');
        return redirect('/admin/barang');
    }

    public function update_barang(Request $req, $id)
    {
        barang: find ($id)->update($req->all());
        notify()->info('Berhasil Diupdate');
        return redirect('/admin/barang');
    }
}