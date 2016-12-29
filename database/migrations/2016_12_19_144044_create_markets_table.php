<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('systemic_code')->nullable(false)->default(0);
            $table->bigInteger('user_id');
            $table->string('market_name')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('city')->nullable(false);
            $table->text('address')->nullable(false);
            $table->char('zip',10)->nullable(false);
            $table->char('market_tel', 11)->nullable(false);
            $table->string('longitude')->nullable(false);
            $table->string('latitude')->nullable(false);
            $table->integer('normal_percentage')->nullable(false)->unsigned();
            $table->char('special_percentage')->nullable(true);
            $table->string('special_percentage_start')->nullable(true)->default(null);
            $table->string('special_percentage_end')->nullable(true);
            $table->string('contract_start')->nullable(true);
            $table->string('contract_end')->nullable(true);
            $table->boolean('market_type')->nullable(false)->default(0);
            $table->string('start')->nullable(true);
            $table->string('end')->nullable(true);
            $table->string('point')->nullable(true);
            $table->text('pos')->nullable(true);
            $table->string('marketer')->nullable(false);
            $table->string('acquainted_by')->nullable(true);
            $table->longText('text')->nullable(false);
            $table->bigInteger('creator_id')->unsigned()->nullable(false);
            $table->bigInteger('editor_id')->unsigned()->nullable(false)->default(0);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
