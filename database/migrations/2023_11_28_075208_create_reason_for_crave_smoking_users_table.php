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
        Schema::create('reason_for_crave_smoking_users', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('reason_for_crave_smoking_id');
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('reason_for_crave_smoking_id')->references('id')->on('reason_for_crave_smoking')->onDelete('cascade');
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade')
                ->index('rfcsu_user_id_foreign'); // Explicitly set index name
            $table->foreignId('reason_for_crave_smoking_id')
                ->constrained()
                ->onDelete('cascade')
                ->index('rfcsu_reason_for_crave_smoking_id_foreign'); // Explicitly set index name
//            $table->foreignId('user_id')->constrained()->onDelete('cascade');
//            $table->foreignId('reason_for_crave_smoking_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reason_for_crave_smoking_users');
    }
};
