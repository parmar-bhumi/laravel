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
        Schema::table('myblogs', function (Blueprint $table) {
            $table->string('slug')->after('subtitle');
            $table->unsignedBigInteger('user_id')->after('id');
            $table->foreign('user_id')->refrences('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('myblogs', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign('slug');
            $table->dropForeign('user_id');
        });
    }
};
