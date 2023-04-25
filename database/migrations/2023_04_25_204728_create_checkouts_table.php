<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('invoice_number');
            $table->string('order_number');
            $table->enum('payment_status',['Belum Bayar','Sedang Diproses','Gagal','Dibatalkan','Selesai']);
            $table->string('payment_method');
            $table->double('amount',8,0);
            $table->text('shipping_address');
            $table->double('shipping_cost',8,0);
            $table->double('tax',8,0);
            $table->double('total_amount',8,0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout');
    }
};
