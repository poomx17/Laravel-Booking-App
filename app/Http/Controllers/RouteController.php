<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //
    public function homestay()
    {
        $url = 'https://admin.mybooking.my/public/api/homestay.php';
        $data = file_get_contents($url);
        $data = json_decode($data, true);
        $homestays = $data['data']['homestays'];
        return view('homestay', ['homestays' => $homestays]);
    }

    public function homestay_detail($id)
    {
        $url = 'https://admin.mybooking.my/public/api/homestay.php';
        $data = file_get_contents($url);
        $data = json_decode($data, true);
        $homestays = $data['data']['homestays'];
        return view('homestay-detail-id', ['id' => $id, 'homestays' => $homestays]);
    }
    
    public function package()
    {
        $url = 'https://admin.mybooking.my/public/api/package.php';
        $data = file_get_contents($url);
        $data = json_decode($data, true);
        $packages = $data['data'];
        $packages = (object) $packages;
        return view('package', ['packages' => $packages]);
    }
}
