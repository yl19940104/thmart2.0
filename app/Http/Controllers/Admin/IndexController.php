<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;    crtl中尽量不使用DB直连

class IndexController extends Controller
{

    protected $website = array(
        'pagename' => "index",
    );

    public function index(Request $request)
    {

        $list = array();

        return view('admin.init',['website' => $this->website, 'list' => $list]);

    }
}
