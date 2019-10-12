<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    public function __construct() {

        //管理后台：需先判定用户是否登录，与是否有权限
        $this->middleware('admininit');

    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
