<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table="payment";

    protected $fillable =["job_number","cur_status_1","final_cost_1","date_of_po_1","date_of_invoice_1","date_of_payment_receipt_1",
    "cur_status_2","final_cost_2","date_of_po_2","date_of_invoice_2","date_of_payment_receipt_2","cur_status_3","final_cost_3","date_of_po_3",
    "date_of_invoice_3","date_of_payment_receipt_3","cur_status_4","final_cost_4","date_of_po_4", "date_of_invoice_4","date_of_payment_receipt_4",
    "cur_status_5","final_cost_5","date_of_po_5","date_of_invoice_5","date_of_payment_receipt_5"];
}
