<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;    crtl中尽量不使用DB直连

class LoginController extends Controller
{

    public function index(Request $request)
    {
        return view('auth.alogin');
    }

    //后台管理用户登录
    public function login(Request $request)
    {
        $params['username'] = $request->input("username");
        $params['password'] = $request->input("password");
        if ($this->chkuserauth($params['username'], $params['password'])) {
            returnJson(1, 'success');
        } else {
            returnJson(0, 'wrong username or password');
        }
    }

    public function chkUserAuth($username,$passward){

        $userList = array(
            'root' => 1,
            'elsayang' => 2,
            'catherineluo' => 3,
            'yuzhouhu' => 4,
            'peterchen' => 5,
            'nicoledong' => 6,
            'digital' => 7,
        );

        $passList = array(
            'root' => '123qwe',
            'elsayang' => 'Elsa009291',
            'catherineluo' => 'Luo190520',
            'yuzhouhu' => 'Hu190520',
            'peterchen' => 'urfamily2019',
            'nicoledong' => 'Nicole2019',
            'digital' => 'Digital190521'
        );

        if($passList[$username] == $passward){

            session(['admin_tokentime' => time()]);
            session(['admin_userid' => $userList[$username]]);
            session(['admin_tokencode' => 'tokencode']);
            session(['admin_username' => $username]);
            session(['group' => array('')]);

            return true;
        }else{
            return false;
        }
    }
}
