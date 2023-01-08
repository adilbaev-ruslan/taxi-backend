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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->foreignId('tarif_id')->constrained();
            $table->foreignId('start_location_id')->constrained('locations');
            $table->foreignId('end_location_id')->constrained('locations');
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('price')->nullable();
            $table->foreignId('status_id')->constrained();
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
        Schema::dropIfExists('orders');
    }
};
