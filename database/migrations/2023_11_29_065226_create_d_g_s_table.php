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
        Schema::create('d_g_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('dg_id');
            $table->string('join_date');
            $table->text('rank');
            $table->string('image');
            $table->longText('message')->charset('utf8mb4')->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('d_g_s');
    }
};
