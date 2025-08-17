<?php

declare(strict_types=1);

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
        Schema::create('projects', function (Blueprint $table): void {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('main_image');
            $table->json('galleries')->default('[]');
            $table->text('preview_description');
            $table->text('description');
            $table->json('tech_stack');
            $table->json('features');
            $table->string('live_demo')->nullable();
            $table->string('source_code')->nullable();
            $table->string('status');
            $table->integer('duration_days');
            $table->integer('team_size');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
