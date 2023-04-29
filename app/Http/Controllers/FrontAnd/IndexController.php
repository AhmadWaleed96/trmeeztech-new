<?php

namespace App\Http\Controllers\FrontAnd;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $services=Service::orderBy('id','desc')->paginate(7);;
        return response()->view('front.index',compact("services"));
    }
}
