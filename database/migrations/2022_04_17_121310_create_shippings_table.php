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
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();$table->string('s_name')->nullable();
            $table->string('s_email')->nullable();
            $table->text('s_address')->nullable();
            $table->string('r_name')->nullable();
            $table->string('r_phone')->nullable();
            $table->string('r_email')->nullable();
            $table->string('r_country')->nullable();
            $table->text('r_address')->nullable();
            $table->string('tracking_no')->nullable();
            $table->string('type')->nullable();
            $table->string('weight')->nullable();
            $table->text('product')->nullable();
            $table->string('destination')->nullable();
            $table->string('origin')->nullable();
            $table->string('quantity')->nullable();
            $table->string('reference_no')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('pickup_date')->nullable();
            $table->string('status')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('shippings');
    }
};
