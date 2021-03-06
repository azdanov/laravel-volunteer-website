<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsableToRegionsTable extends Migration
{
    public function up(): void
    {
        Schema::table('regions', static function (Blueprint $table): void {
            $table->boolean('usable')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('regions', static function (Blueprint $table): void {
            $table->dropColumn('usable');
        });
    }
}
