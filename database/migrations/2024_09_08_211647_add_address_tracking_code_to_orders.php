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
        Schema::table('orders', function (Blueprint $table) {
            $table->string('tracking_code')->nullable()->after('status');
            $table->string('color')->nullable()->after('tracking_code');
            $table->string('postal_code')->nullable()->after('color');
            $table->string('company_post')->nullable()->after('postal_code');
            $table->text('address')->nullable()->after('company_post');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
