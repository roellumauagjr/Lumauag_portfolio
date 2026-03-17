<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            if (!Schema::hasColumn('skills', 'number_prefix')) {
                $table->string('number_prefix')->nullable()->after('id');
            }
            if (!Schema::hasColumn('skills', 'order_column')) {
                $table->integer('order_column')->default(0)->after('level');
            }
        });

        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'client_name')) {
                $table->string('client_name')->nullable()->after('title');
            }
            if (!Schema::hasColumn('projects', 'order_column')) {
                $table->integer('order_column')->default(0)->after('link');
            }
            if (!Schema::hasColumn('projects', 'is_published')) {
                $table->boolean('is_published')->default(true)->after('order_column');
            }
            if (!Schema::hasColumn('projects', 'slug')) {
                $table->string('slug')->nullable()->after('title');
            }
        });

        Schema::table('experiences', function (Blueprint $table) {
            if (!Schema::hasColumn('experiences', 'year')) {
                $table->string('year')->nullable()->after('end_date');
            }
        });
    }


    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn(['number_prefix', 'order_column']);
        });
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['client_name', 'order_column', 'is_published', 'slug']);
        });
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn('year');
        });
    }
};
