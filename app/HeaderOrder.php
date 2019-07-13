<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderOrder extends Model
{
    protected $table = 'headerOrders';
    protected $primaryKey = 'idHeader';

    public function getPaidAttribute() {
    	if ($this->payment_status == 'Invalid') {
    		return false;
    	}
    	return true;
    }
}
