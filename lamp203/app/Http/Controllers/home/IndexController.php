<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Goods\Type;
use App\Models\Goods\Goods;
use App\Models\Goods\Goodspic;


use DB;


class IndexController extends Controller
{


    public function index(Request $request)
    {
    	$data = Type::getsubcate(0);
    	// dump($data);	
    	return view('home.index',[
    		'data' =>$data
    	]);
    }
}
