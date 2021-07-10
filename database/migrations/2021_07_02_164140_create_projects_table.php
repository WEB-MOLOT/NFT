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
            $table->boolean('is_verified')->default(false);
            $table->boolean('is_published')->default(0);
            $table->string('name', 100);
            $table->string('slug');
            $table->unsignedSmallInteger('rating')->nullable();
            $table->string('currency')->nullable();
            $table->unsignedInteger('min_price')->nullable();
            $table->unsignedInteger('max_price')->nullable();
            $table->unsignedInteger('available_count')->nullable();
            $table->text('description');
            $table->string('email', 100);
            $table->string('twitter', 100);
            $table->string('website', 100);
            $table->timestamp('started_at')->nullable();
            $table->string('started_at_timezone')->nullable();
            $table->timestamp('ended_at')->nullable();
            $table->string('ended_at_timezone')->nullable();
            $table->foreignId('user_id')->nullable()->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('project_socials', function(Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->foreignId('social_id')->index()->references('id')->on('socials')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('project_categories', function(Blueprint $table) {
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnDelete();
            $table->foreignId('project_id')->references('id')->on('projects')->cascadeOnDelete();
        });

        Schema::create('project_statistics', function(Blueprint $table) {
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->unsignedInteger('views');
            $table->date('date_at');
        });

        Schema::create('project_user_subscriptions', function(Blueprint $table) {
            $table->foreignId('project_id')->index()->references('id')->on('projects')->cascadeOnDelete();
            $table->foreignId('user_id')->index()->references('id')->on('users')->cascadeOnDelete();
        });
    }
}
