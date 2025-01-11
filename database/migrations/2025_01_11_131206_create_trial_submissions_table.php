<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('trial_submissions', function ($table) {
        $table->id();
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->string('job_title');
        $table->string('company_name');
        $table->string('industry');
        $table->string('phone');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trial_submissions');
    }
};
