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
        Schema::create('cigarettes', function (Blueprint $table) {
            $table->id();
            $table->enum('type_of_smoking', ['سيجارة لكترونية', 'سيجارة عادية', 'سيجارة فيب' ,'ارجيلة'])->default('سيجارة عادية');
            $table->string('count_per_day')->nullable();
            $table->string('count_per_week')->nullable();
            $table->string('price')->nullable();
            $table->date('start_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cigarettes');
    }
};
