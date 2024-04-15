<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        "customer_name",
        "customer_email",
        "customer_phone",
        "customer_adresse",
        "customer_shop_name",
        "customer_type",
        "customer_bank_name",
        "customer_account_holder",
        "customer_account_number",
    ];
}
