<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Pesan;

class AdminController extends Controller
{
    public function view_kategori(){
        $data = Kategori::all();
        return view('admin.kategori', compact('data'));
    }
    public function add_kategori(Request $request){
        $kategori = New Kategori;
        $kategori->nama_kategori = $request->kategori;
        $kategori->save();
        toastr()->closeButton()->success('Sukses Ditambahkan');
        return redirect()->back();
    }
    public function delete_kategori($id){
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_kategori($id){
        $data = Kategori::find($id);
        return view('admin.edit_kategori', compact('data'));
    }

    public function update_kategori(Request $request,$id){
        $data = Kategori::find($id);
        $data->nama_kategori= $request->kategori;
        $data->save();
        toastr()->closeButton()->success('Update Sukses');
        return redirect('/view_kategori');
    }
    public function add_produk(){
        $kategori = Kategori::all();
        return view('admin.add_produk', compact('kategori'));
    }
    public function upload_produk(Request $request){
        $data = new Produk;
        $data->title = $request->title;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->quantity = $request->qty;
        $data->kategori = $request->kategori;

        $gambar = $request->gambar;
        if($gambar){
            $namagambar = time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('produks', $namagambar);

            $data->gambar = $namagambar;
        }

        $data->save();
        toastr()->closeButton()->success('Berhasil Menambahkan Produk Anda');
        return redirect()->back();

    }

    public function view_produk(){
        $produk = Produk::paginate(5);
        return view('admin.view_produk', compact('produk'));
    }

    public function delete_produk($id){
        $data = Produk::find($id);
        $gambar_path = public_path('produk/'.$data->gambar);
        if(file_exists($gambar_path)){
            unlink($gambar_path);
        }
        $data->delete();
        toastr()->closeButton()->success('Produk Berhasil Dihapus');
        return redirect()->back();
    }
    public function update_produk($id){
        $data = Produk::find($id);
        $kategori = Kategori::all();
        return view('admin.update_produk', compact('data','kategori'));

    }

    public function edit_produk(Request $request){
        $data = Produk::find($request->id);
        $data->title = $request->title;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->quantity = $request->qty;
        $data->kategori = $request->kategori;

        $gambar = $request->gambar;
        if($gambar){
            $namagambar = time().'.'.$gambar->getClientOriginalExtension();
            $request->gambar->move('produks', $namagambar);

            $data->gambar = $namagambar;
        }
        $data->save();
        toastr()->closeButton()->success('Berhasil Update Produk Anda');
        return redirect('/view_produk');
    }

    public function cari_produk(Request $request){
        $cari = $request->cari;
        $produk = Produk::where('title','LIKE', '%'.$cari.'%')->paginate(5);
        return view('admin.view_produk', compact('produk'));
    }

    public function view_pesanan(){
        $data = Pesan::all();
        return view('admin.pesanan',compact('data'));
    }
    public function otw($id){
        $data = Pesan::find($id);
        $data->status = 'Dalam Perjalanan';
        $data->save();

        return redirect('/view_pesanan');
    }
    public function dikirim($id){
        $data = Pesan::find($id);
        $data->status = 'Dikirim';
        $data->save();

        return redirect('/view_pesanan');
    }
}
