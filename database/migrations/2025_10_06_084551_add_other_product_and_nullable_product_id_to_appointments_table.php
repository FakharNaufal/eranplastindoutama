<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1) Tambah kolom other_product kalau belum ada
        Schema::table('appointments', function (Blueprint $table) {
            if (!Schema::hasColumn('appointments', 'other_product')) {
                $table->string('other_product')->nullable()->after('product_id');
            }
        });

        // 2) Pastikan tidak ada foreign key ganda untuk product_id:
        //    jika ada FK yang merefer ke products(id), drop dulu nama constraint-nya
        $dbName = DB::getDatabaseName();

        $fk = DB::selectOne("
            SELECT CONSTRAINT_NAME
            FROM information_schema.KEY_COLUMN_USAGE
            WHERE TABLE_SCHEMA = ?
              AND TABLE_NAME = 'appointments'
              AND COLUMN_NAME = 'product_id'
              AND REFERENCED_TABLE_NAME = 'products'
            LIMIT 1
        ", [$dbName]);

        if ($fk && isset($fk->CONSTRAINT_NAME)) {
            $constraintName = $fk->CONSTRAINT_NAME;
            // Drop FK jika ada
            DB::statement("ALTER TABLE `appointments` DROP FOREIGN KEY `{$constraintName}`");
        }

        // 3) Ubah kolom product_id jadi nullable jika belum nullable
        //    (beberapa driver/mode tidak mengijinkan change kalau tipe sama, tapi kita coba)
        if (Schema::hasColumn('appointments', 'product_id')) {
            // Use raw ALTER to avoid some DB engine limitations
            // (MySQL: alter column nullable)
            DB::statement("ALTER TABLE `appointments` MODIFY `product_id` BIGINT UNSIGNED NULL");
        } else {
            // jika kolom tidak ada, buat kolom nullable
            Schema::table('appointments', function (Blueprint $table) {
                $table->unsignedBigInteger('product_id')->nullable()->after('id');
            });
        }

        // 4) Tambahkan FK baru (sekarang pasti belum ada)
        Schema::table('appointments', function (Blueprint $table) {
            // pastikan index/constraint belum ada — Schema builder akan menambahkan FK
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // 1) Drop foreign key jika ada
        $dbName = DB::getDatabaseName();

        $fk = DB::selectOne("
            SELECT CONSTRAINT_NAME
            FROM information_schema.KEY_COLUMN_USAGE
            WHERE TABLE_SCHEMA = ?
              AND TABLE_NAME = 'appointments'
              AND COLUMN_NAME = 'product_id'
              AND REFERENCED_TABLE_NAME = 'products'
            LIMIT 1
        ", [$dbName]);

        if ($fk && isset($fk->CONSTRAINT_NAME)) {
            $constraintName = $fk->CONSTRAINT_NAME;
            DB::statement("ALTER TABLE `appointments` DROP FOREIGN KEY `{$constraintName}`");
        }

        // 2) Ubah product_id kembali non-nullable (jika ada)
        if (Schema::hasColumn('appointments', 'product_id')) {
            DB::statement("ALTER TABLE `appointments` MODIFY `product_id` BIGINT UNSIGNED NOT NULL");
        }

        // 3) Hapus kolom other_product jika ada
        Schema::table('appointments', function (Blueprint $table) {
            if (Schema::hasColumn('appointments', 'other_product')) {
                $table->dropColumn('other_product');
            }
        });
    }
};
