<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JabatanController extends Controller
{
    public function index(Request $request)
    {

        $pagination = 5;
        $jabatan = DB::table('jabatan')->get();

        return view('admin/jabatan', [
            'jabatan' => $jabatan,

            'title' => 'Form Jabatan'
        ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function create()
    {
        return view('admin/add-jabatan', [
            'title' => 'Form Tambah Jabatan'
        ]);
    }

    // method untuk insert data ke table jabatan
    public function store(Request $request)
    {
        // insert data ke table jabatan
        DB::table('jabatan')->insert([
            'jabatan_nama' => $request->nama,
            'jabatan_gaji' => $request->gaji,
            'jabatan_deskripsi' => $request->deskripsi,

        ]);
        // alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }

    public function edit($id)
    {
        // mengambil data jabatan berdasarkan id yang dipilih
        $jabatan = DB::table('jabatan')->where('jabatan_id', $id)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('admin/update-jabatan', [
            'jabatan' => $jabatan,
            'title' => 'Form Tambah jabatan'
        ]);
    }

    // update data jabatan
    public function update(Request $request)
    {
        // update data jabatan
        DB::table('jabatan')->where('jabatan_id', $request->id)->update([
            'jabatan_nama' => $request->nama,
            'jabatan_gaji' => $request->gaji,
            'jabatan_deskripsi' => $request->deskripsi,
        ]);
        // alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }
    public function delete($id)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        DB::table('jabatan')->where('jabatan_id', $id)->delete();

        // alihkan halaman ke halaman jabatan
        return redirect('/jabatan');
    }
}
