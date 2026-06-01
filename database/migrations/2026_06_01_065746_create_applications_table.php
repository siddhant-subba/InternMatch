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
    Schema::create('applications', function (Blueprint $table) {
        $table->id();
        $table->foreignId('internship_id')->constrained()->onDelete('cascade'); // Links to the internship
        $table->string('applicant_name');
        $table->string('applicant_email');
        $table->text('cover_letter');
        $table->string('resume_link'); // URL to Google Drive/Dropbox resume
        $table->timestamps();
    });
     }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
