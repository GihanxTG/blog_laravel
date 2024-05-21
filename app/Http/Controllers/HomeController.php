<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();
use DB;

class HomeController extends Controller
{
    function index() {

        $tinnoibat = DB::table('tin')
        ->orderBy('xem', 'desc')
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
            'tinnoibat'=>$tinnoibat,
            'tinmoi'=>$tinmoi,
            'xemnhieu'=>$xemnhieu
        ]);
    }

    function loaitin($id) {

        $loaitin = DB::table('loaitin')
        ->where('id', $id)
        ->first();
        
        $list_lt = DB::table('tin')
        ->where('idLT', '=', $id)
        ->orderBy('ngayDang', 'desc')
        // ->get();
        ->paginate(6)->withQueryString();

        return view('loaitin', ['list_lt'=>$list_lt, 'loaitin' => $loaitin]);
    }

    function detail($id) {
        $detail = DB::table('tin')
        ->where('id', $id)
        ->first();
        return view('detail', ['detail'=>$detail]);
    }
}
