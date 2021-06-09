<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class MasterController extends Controller
{
    public function login()
    {
        return view ('login');
    }

    public function profile()
    {
        return view ('profile');
    }

    public function riwayat_lahan()
    {
        return view ('riwayat_lahan');
    }

    public function notifikasi()
    {
        return view ('notifikasi');
    }
}
