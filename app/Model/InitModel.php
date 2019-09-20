<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class InitModel extends Model
{
    protected $topCategory = [];
    protected $supplier = [];
    protected $brand = [];
    protected $attribute = [];

    protected $data = array('err' => true, 'code' => '999', 'msg' => 'init error');

    function __construct() {
        $this->getSpu();
        $this->getSupplier();
        $this->getBrand();
        $this->getAttribute();
    }

    protected function getSpu() {

    }

    protected function getSupplier() {

    }

    protected function getBrand() {

    }

    protected function getAttribute() {

    }

    protected function chkSpu() {

    }

    protected function chkSpplier() {

    }

    protected function chkBrand() {

    }

    protected function chkAttribute() {

    }
}