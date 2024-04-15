<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id("supplier_id");
            $table->string("supplier_name");
            $table->string("supplier_email");
            $table->string("supplier_phone");
            $table->string("supplier_adresse");
            $table->string("supplier_shop_name");
            $table->string("supplier_type");
            $table->string("supplier_bank_name");
            $table->string("supplier_account_holder");
            $table->integer("supplier_account_number");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
