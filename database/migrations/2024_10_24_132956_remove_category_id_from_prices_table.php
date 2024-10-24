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
        Schema::table('prices', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // 外部キー制約を削除
            $table->dropColumn('category_id');    // カラム自体を削除
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained()->cascadeOnDelete(); // 逆操作
        });
    }
};
