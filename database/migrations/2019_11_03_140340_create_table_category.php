<?php

use App\AppConfig;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTableCategory extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create(AppConfig::DB_TABLE_NAME_CATEGORY, function (Blueprint $table) {

            $table->increments('id');
            $table->string('name')->unique();
            $table->enum(AppConfig::DB_TABLE_COL_IS_ACTIVE, array('0','1'))->default('0');
            $table->enum(AppConfig::DB_TABLE_COL_IS_DELETED, array('0','1'))->default('0');
            $table->enum(AppConfig::DB_TABLE_COL_IS_DEFAULT, array('0','1'))->default('0');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {

        Schema::dropIfExists(AppConfig::DB_TABLE_NAME_CATEGORY);
    }
}
