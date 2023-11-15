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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('status')->default(0);
            $table->string('type')->default('user');
            $table->integer('is_bpo_approved')->default(0);
            $table->string('sex')->nullable();
            $table->string('occupation')->nullable();
            $table->string('global_secret_word')->nullable();
            $table->string('company_name')->nullable();
            $table->string('c_email')->nullable();
            $table->string('c_phone')->nullable();
            $table->text('c_address')->nullable();
            $table->string('c_logo')->nullable();
            $table->string('global_user_id')->nullable();
            $table->string('xcode')->nullable();
            $table->string('pin')->nullable();
            $table->string('c_phone2')->nullable();
            $table->string('c_slogan')->nullable();
            $table->string('c_city')->nullable();
            $table->string('c_country')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alter_users');
    }
};
