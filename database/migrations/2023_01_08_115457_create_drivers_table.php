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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('driver_tarif_id')->constrained();
            $table->date('birth_date');
            $table->string('driving_licence_number')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('phone', 9);
            $table->string('car_gov_number', 8);
            $table->foreignId('car_model_id')->constrained();
            $table->date('active_date');
            $table->foreignId('location_id')->constrained();
            $table->boolean('working')->default(false);
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
        Schema::dropIfExists('drivers');
    }
};
