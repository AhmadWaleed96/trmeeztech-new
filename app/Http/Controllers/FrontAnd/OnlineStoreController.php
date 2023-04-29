<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineStoreController extends Controller
{
    public function index(){
        return response()->view('front.online-store');
    }
}
