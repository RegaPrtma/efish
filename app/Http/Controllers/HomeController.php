<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Keranjang;
use App\Models\Pesan;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $user = User::where('usertype','user')->get()->count();
        $produk = Produk::all()->count();
        $pesan = Pesan::all()->count();
        $kirim = Pesan::where('status','Dikirim')->get()->count();
        return view('admin.index',compact('user','produk','pesan','kirim'));
    }

    public function home(){
        $produk = Produk::all();
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Keranjang::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }
        
        return view('home.index',compact('produk','count'));
    }
    public function login_home(){
        $produk = Produk::all();
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Keranjang::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }
        
        return view('home.index',compact('produk','count'));
    }
    public function produk_detail($id){
        $data = Produk::find($id);
        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Keranjang::where('user_id',$userid)->count();
        }
        else
        {
            $count = '';
        }
        
        return view('home.produk_detail',compact('data','count'));

    }

    public function add_keranjang($id){
        $produk_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $data = new Keranjang;
        $data->user_id = $user_id;
        $data->produk_id = $produk_id;
        $data->save();
        toastr()->closeButton()->success('Sukses Ditambahkan ke keranjang');
        return redirect()->back();
    }
    public function menu_keranjang(){

        if(Auth::id())
        {
            $user = Auth::user();
            $userid = $user->id;
            $count = Keranjang::where('user_id',$userid)->count();
            $keranjang = Keranjang::where('user_id',$userid)->get();
        }
        return view('home.menu_keranjang',compact('count','keranjang'));
    }

    public function confirm_order(Request $request){
        $name = $request->nama;
        $address = $request->alamat;
        $phone = $request->phone;
        $userid = Auth::user()->id;
        $keranjang = Keranjang::where('user_id',$userid)->get();
        foreach( $keranjang as $keranjangs ){

            $pesan = new Pesan;
            $pesan->nama = $name;
            $pesan->alamat = $address;
            $pesan->phone = $phone;
            $pesan->user_id = $userid;
            $pesan->produk_id = $keranjangs->produk_id;
            $pesan->save();
            
        }
        $hapus_keranjang = Keranjang::where('user_id',$userid)->get();
        foreach( $hapus_keranjang as $hapus){
            $data = Keranjang::find($hapus->id);
            $data->delete();
        }
        toastr()->closeButton()->success('Pesanan anda berhasil');
        return redirect()->back();
        
    }
    public function menu_order(){
        $user = Auth::user()->id;
        $count = Keranjang::where('user_id',$user)->get()->count();
        $pesan = Pesan::where('user_id',$user)->get();
        return view('home.pesanan',compact('count','pesan'));
    }
}
