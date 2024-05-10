<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    function index() {
        // $theloai = DB::table('loaitin')
        // ->get();

        $tinnoibat = DB::table('tin')
        // ->select('id', 'tieuDe', 'xem', 'ngayDang')
        ->orderBy('xem', 'desc')
        // ->limit(10);
        ->first();

        $tinmoi = DB::table('tin')
        ->select('id', 'tieuDe', 'ngayDang')
        ->orderBy('ngayDang', 'desc')
        ->limit(10);
        $tinmoi = $tinmoi->get();

        $xemnhieu = DB::table('tin')
        ->select('id', 'tieuDe', 'xem', 'ngayDang')
        ->orderBy('xem', 'desc')
        ->limit(7);
        $xemnhieu = $xemnhieu->get();

        return view('home', [
            // 'theloai'=>$theloai,
            'tinnoibat'=>$tinnoibat,
            'tinmoi'=>$tinmoi,
            'xemnhieu'=>$xemnhieu
        ]);
    }

    function loaitin($id) {
        // $kq = DB::table('loaitin')
        // ->where('id', $id)
        // ->exists();
        // if (!$kq) echo "Không tồn tại loại tin này";

        $loaitin = DB::table('loaitin')
        ->where('id', $id)
        ->first();
        
        $tin = DB::table('tin')
        ->select('id', 'tieuDe', 'tomTat', 'ngayDang', 'xem')
        ->where('idLT', '=', $id)
        ->orderBy('ngayDang', 'desc');
        $list_lt = $tin->get();

        return view('loaitin', ['list_lt'=>$list_lt, 'loaitin' => $loaitin]);
    }

    // function loaitin() {
    //     return view('loaitin');
    // }

    function detail($id) {
        $detail = DB::table('tin')
        ->where('id', $id)
        ->first();
        return view('detail', ['detail'=>$detail]);
    }

    // function detail() {
    //     return view('detail');
    // }
}
