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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamp();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained('jobs');
            $table->foreignId('tag_id')->constrained('tags');
            $table->timestamps();
        });

        Schema::create('jobs', function (Blueprint $table)  {
            $table->id();
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('salary');
            $table->string('location');
            $table->string('employer');
            $table->string('employer_logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
        Schema::dropIfExists('employers');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('jobs');
    }
};
