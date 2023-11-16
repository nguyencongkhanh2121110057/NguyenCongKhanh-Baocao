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
        Schema::create('nck_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('create_by');
            $table->unsignedInteger('update_by')->nullable();
            $table->timestamps();
            $table->tinyInteger('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nck_post');
    }
};
