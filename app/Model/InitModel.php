<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InitModel extends Model
{
    protected $topCategory = [];
    protected $supplier = [];
    protected $brand = [];

    protected $data = array('err' => true, 'code' => '999', 'msg' => 'init error');

    function __construct() {
        $this->getSpu();
        $this->getSupplier();
        $this->getBrand();
    }

    protected function getSpu() {

    }

    protected function getSupplier() {

    }

    protected function getBrand() {

    }

    protected function chkSpu() {

    }

    protected function chkSpplier() {

    }

    protected function chkBrand() {

    }
}