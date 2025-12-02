<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConvertArticlesToUtf8mb4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Conversion de la table entière (SAFE avec données existantes)
        DB::statement('ALTER TABLE articles CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Retour à latin1_general_ci (collation d'origine)
        DB::statement('ALTER TABLE articles CONVERT TO CHARACTER SET latin1 COLLATE latin1_general_ci');
    }
}
