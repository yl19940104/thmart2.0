<?php

namespace App\Http\Middleware;

use Closure;

class AdminInit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //验证token信息
        if($this->chkToken()){  //有token，重新获取
            //获取session值相关
            if((time() - session('admin_tokentime')) < config('init_cfg.tokeninfo.admintokentime')) {
                //token未过期，不更新用户信息
            }else{
                //token过期，直接退出
                //$this->getUserinfo();
                return redirect('Admin/login');
                exit();

            }
        }else{
            return redirect('Admin/login');
            exit();

        }

        return $next($request);

    }

    public function chkToken(){
        if(session()->has('admin_tokentime') && session()->has('admin_tokencode') && session()->has('admin_username')){
            return true;
        }else{
            return false;
        }
    }

    public function AuthchkFmt(){
        if($this->chkToken()){  //有token，重新获取
            //获取session值相关
            if((time() - session('admin_tokentime')) < config('init_cfg.tokeninfo.admintokentime')) {
                return true;
            }else{
                //token过期，直接退出
                return false;
            }
        }else{
            return false;
        }
    }

    /*
    public function getUserinfo(){
        $url = config('init_cfg.tokeninfo.url_userdetail');
        $params = false;
        $header = array("TOKEN:".session("tokencode"));

        $info = json_decode(curlRequest($url, $params, true, false,$header));
//echo "a";print_r($info);echo "a";exit();
        if($info->code == '1'){
            session(['tokentime' => time()]);
            session(['userid' => $info->data->id]);
            session(['nickname' => $info->data->nickname]);
            session(['pic' => $info->data->pic]);
            session(['fullname' => $info->data->fullname]);
            session(['mobile' => $info->data->mobile]);
            session(['email' => $info->data->email]);
            $keyname = 'address_'.session("locale");
            session(['address' => $info->data->$keyname]);
        }else{
            echo $info->message;
            echo "<br>待完善--AuthChk/getUserinfo<br>";
            print_r($info);
            exit();
        }
    }
    */

}
