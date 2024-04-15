<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable=[
        "supplier_name",
        "supplier_email",
        "supplier_phone",
        "supplier_adresse",
        "supplier_shop_name",
        "supplier_type",
        "supplier_bank_name",
        "supplier_account_holder",
        "supplier_account_number",
    ];
}
