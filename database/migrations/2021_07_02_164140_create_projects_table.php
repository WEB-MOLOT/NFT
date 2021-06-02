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
            $table->string('logo');
            $table->string('rating', 10)->nullable();
            $table->string('rating_color', 6)->nullable();
            $table->unsignedTinyInteger('currency');
            $table->unsignedInteger('min_price')->nullable();
            $table->unsignedInteger('max_price')->nullable();
            $table->unsignedInteger('available_count')->nullable();
            $table->text('content');
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('project_details', function(Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->string('email', 100)->nullable();
            $table->string('discord', 100)->nullable();
            $table->string('medium', 100)->nullable();
            $table->string('website', 100)->nullable();
            $table->json('images');
            $table->json('detail_content');
        });

        Schema::create('project_socials', function(Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->unsignedTinyInteger('social_service');
            $table->string('account');
            $table->unsignedInteger('followers_count');
            $table->timestamp('updated_at')->nullable();
        });

        Schema::create('category_project', function(Blueprint $table) {
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreignId('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });
    }
}
