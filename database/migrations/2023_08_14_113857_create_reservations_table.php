<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('event_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('tour_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('package_id');
            $table->string('name');
            $table->string('email');
            $table->string('plan_name');
            $table->string('plan_price');
            $table->string('plan_quantity');
            $table->string('paymentID')->nullable();
            $table->string('confirm_paid')->default('no');
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->string('cost');
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
        Schema::dropIfExists('reservations');
    }
}
