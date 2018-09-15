<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesTransaction extends Model
{
    protected $primaryKey = 'st_no';
    protected $table = 'sales_transaction';
    protected $fillable = array(
        'st_no',
        'st_date',
        'st_type',
        'st_term',
        'st_customer_id',
        'st_due_date',
        'st_status',
        'st_action',
        'st_email',
        'st_send_later',
        'st_bill_address',
        'st_note',
        'st_memo',
        'st_i_attachment'
    );

    public $timestamps = true;

    public function customer_info(){
	    return $this->hasOne('App\Customers','customer_id','st_customer_id');
    }

    public function invoice_info(){
	    return $this->hasMany('App\StInvoice','st_i_no','st_no');
    }
    
}
