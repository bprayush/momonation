<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhaltiTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khalti_transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('mobile');
            $table->decimal('amount', 8, 2);
            $table->decimal('fee_deducted', 8, 2);
            $table->string('khalti_payment_idx');
            $table->string('verified_token');
            $table->string('type');
            $table->string('status');
            $table->string('number_of_momos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khalti_transactions');
    }
}
