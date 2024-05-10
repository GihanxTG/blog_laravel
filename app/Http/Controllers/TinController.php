<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TinController extends Controller
{
    function index() {
        return view('index');
    }

    function tinxemnhieu() {
        $query = DB::table('tin')
        ->select('id', 'tieuDe', 'xem')
        ->orderBy('xem', 'desc')
        ->limit(10);
        $data = $query->get();
        return view('xemnhieu', ['data'=>$data]);
    }

    function tinmoinhat() {
        $query = DB::table('tin')
        ->select('id', 'tieuDe', 'ngayDang')
        ->orderBy('ngayDang', 'desc')
        ->limit(10);
        $data = $query->get();
        return view('tinmoi', ['data'=>$data]);
    }

    function tintrongloai($id) {
        // $kq = DB::table('loaitin')
        // ->where('id', $id)
        // ->exists();
        // if (!$kq) echo "Không tồn tại loại tin này";

        $loaitin = DB::table('loaitin')
        ->where('id', $id)
        ->first();
        
        $tin = DB::table('tin')
        ->select('id', 'tieuDe', 'tomTat')
        ->where('idLT', '=', $id)
        ->orderBy('ngayDang', 'desc');
        $data = $tin->get();

        return view('tintrongloai', ['data'=>$data, 'loaitin' => $loaitin]);
    }

    function chitiettin($id) {
        $tin = DB::table('tin')
        ->where('id', $id)
        ->first();
        return view('chitiettin', ['tin'=>$tin]);
    }
}
