<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\InitModel;

class SpuModel extends InitModel
{
    protected $secCategory = [];
    protected $savedata;

    //初始化一下配置
    protected function initDirectory($topCategory) {
        //初始化参数，若非法，直接赋值，主要为了防止未定义的调用，赋予初始值
        $topCatgory = $this->chkSpu($topCategory);
        $this->InitSecCategory();
        return true;
    }

    protected function InitSecCategory($type) {
        if ($type == 'all') {
            return $this->secCategory = [];
        }
    }

    public function getSavedata() {
        return $this->savedata;
    }

    public function chkInput_index() {

    }

    public function chkInput_detail() {

    }
}