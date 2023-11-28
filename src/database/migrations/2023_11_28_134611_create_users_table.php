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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->float('gen');
            $table->unsignedBigInteger('community_id');
            $table->string('mail')->unique();
            $table->string('password');
            $table->unsignedBigInteger('role_id')->default(0)->comment('0:一般,1:サバリ,2:本部');
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
