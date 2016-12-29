<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('systemic_code')->nullable(false)->default(0);
            $table->string('first_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->char('social_security_number', 10)->nullable(false)->unique();
            $table->string('education')->nullable();
            $table->string('occupation')->nullable();
            $table->string('state')->nullable(false);
            $table->string('city')->nullable(false);
            $table->text('address')->nullable(false);
            $table->char('zip', 10)->nullable()->unique();
            $table->char('home_tel', 11)->nullable();
            $table->char('work_tel', 11)->nullable();
            $table->char('emergency_tel', 11)->nullable();
            $table->char('cell_1', 11)->nullable(false)->unique();
            $table->char('cell_2', 11)->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('bank_name')->nullable(false);
            $table->char('bank_card_number', 16)->nullable(false)->unique();
            $table->string('bank_account_number')->nullable(false)->unique();
            $table->string('zhenic_card_number')->nullable(false)->unique();
            $table->string('marketer')->nullable();
            $table->string('acquainted_by')->nullable();
            $table->longText('text')->nullable();
            $table->bigInteger('creator_id')->nullable();
            $table->bigInteger('editor_id')->nullable();
            $table->boolean('role')->nullable(false);
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('last_logged_in_at')->nullable();
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
        Schema::drop('users');
    }
}
