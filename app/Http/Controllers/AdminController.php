<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Barang;
=======
use App\Models\barang;
>>>>>>> 668b34001591edffbe788c94551622f19656e975
use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< HEAD
    // dashboard admin
=======
>>>>>>> 668b34001591edffbe788c94551622f19656e975
    public function admin()
    {
        return view('admin.beranda');
    }

<<<<<<< HEAD
    // menampilkan data barang
    public function barang()
    {
        $data = Barang::paginate(2);
        return view('admin.barang.index', compact('data'));
    }

    // menampilkan form tambah barang
=======
    public function barang()
    {
        $data = barang::paginate(2);

        return view('admin.barang.index', compact('data'));
    }

>>>>>>> 668b34001591edffbe788c94551622f19656e975
    public function tambah_barang()
    {
        return view('admin.barang.tambah');
    }

<<<<<<< HEAD
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
=======
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
>>>>>>> 668b34001591edffbe788c94551622f19656e975
        notify()->success('Berhasil Disimpan');
        return redirect('/admin/barang');
    }

<<<<<<< HEAD
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
=======
    public function update_barang(Request $req, $id)
    {
        barang: find ($id)->update($req->all());
        notify()->info('Berhasil Diupdate');
        return redirect('/admin/barang');
    }
}
>>>>>>> 668b34001591edffbe788c94551622f19656e975
