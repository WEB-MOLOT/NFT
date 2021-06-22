<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('status');
            $table->boolean('is_verified');
            $table->boolean('is_published');
            $table->string('name', 100);
            $table->string('logo');
            $table->unsignedSmallInteger('rating')->nullable();
            $table->unsignedTinyInteger('currency')->nullable();
            $table->unsignedInteger('min_price')->nullable();
            $table->unsignedInteger('max_price')->nullable();
            $table->unsignedInteger('available_count')->nullable();
            $table->text('content');
            $table->timestamp('started_at')->nullable();
            $table->unsignedTinyInteger('started_at_timezone')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->unsignedTinyInteger('ended_at_timezone')->nullable();
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('project_details', function(Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->string('email', 100)->nullable();
            $table->string('discord', 100)->nullable();
            $table->string('medium', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('twitter', 100);
            $table->string('website', 100);
            $table->json('images');
            $table->json('detail_content');
        });

        Schema::create('category_project', function(Blueprint $table) {
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreignId('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });

        Schema::create('project_statistics', function(Blueprint $table) {
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->unsignedInteger('views');
            $table->date('date_at');
        });
    }
}
