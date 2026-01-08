<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // dashboard admin
    public function admin()
    {
        return view('admin.beranda');
    }

    // menampilkan data barang
    public function barang()
    {
        $data = Barang::paginate(2);
        return view('admin.barang.index', compact('data'));
    }

    // menampilkan form tambah barang
    public function tambah_barang()
    {
        return view('admin.barang.tambah');
    }

    // menampilkan form edit barang
    public function edit_barang($id)
    {
        $data = Barang::find($id);
        return view('admin.barang.edit', compact('data'));
    }

    // menyimpan data barang
    public function simpan_barang(Request $req)
    {
        Barang::create($req->all());
        notify()->success('Berhasil Disimpan');
        return redirect('/admin/barang');
    }

    // mengupdate data barang
    public function update_barang(Request $req, $id)
    {
        Barang::find($id)->update($req->all());
        notify()->info('Berhasil Diupdate');
        return redirect('/admin/barang');
    }

    // menghapus data barang
    public function delete_barang($id)
    {
        Barang::find($id)->delete();
        emotify('success', 'Berhasil Di Hapus');
        return back();
    }
}
