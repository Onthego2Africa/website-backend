<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('plan_1_name');
            $table->string('image');
            $table->string('plan_1_price')->nullable();
            $table->string('plan_2_name')->nullable();
            $table->string('plan_2_price')->nullable();
            $table->string('plan_3_name')->nullable();
            $table->string('plan_3_price')->nullable();
            $table->string('plan_4_name')->nullable();
            $table->string('plan_4_price')->nullable();

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
        Schema::dropIfExists('packages');
    }
}
