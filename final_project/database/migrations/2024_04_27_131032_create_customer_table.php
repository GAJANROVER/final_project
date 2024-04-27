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
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('custo_id');
            $table->string('custo_name')->nullable();
            $table->string('custo_email')->nullable();
            $table->string('custo_address')->nullable();
            $table->string('custo_nic')->nullable();
            $table->string('custo_pno')->nullable();
            $table->date('custo_dob')->nullable();
            $table->string('custo_gender')->nullable();
            $table->string('custo_pw')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
