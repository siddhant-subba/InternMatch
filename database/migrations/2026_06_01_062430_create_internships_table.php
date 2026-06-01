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
    Schema::create('internships', function (Blueprint $table) {
        $table->id();
        $table->string('title');        // e.g., "Laravel Developer Intern"
        $table->string('company');      // e.g., "Kathmandu Tech Hub"
        $table->string('location');     // e.g., "Kupondole, Lalitpur"
        $table->text('description');    // Details about the internship
        $table->timestamps();
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
