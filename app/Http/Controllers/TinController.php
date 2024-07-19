<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    function index()
    {
        return view("welcome");
    }
    function chitiet($id = 0)
    {
        $tin = DB::table('tin')->where('id', $id)->first();
        $data = ['id' => $id , 'tin' => $tin];
        return view("chitiet", $data);
    }

    public function tintrongloai()
    {
        // Lấy tất cả các tin từ bảng 'tin'
        $listtin = DB::table('tin')->get();

        // Truyền danh sách tin vào view
        $data = ['listtin' => $listtin];

        // Trả về view 'tintrongloai' với dữ liệu đã truyền
        return view('tintrongloai', $data);
    }
}
