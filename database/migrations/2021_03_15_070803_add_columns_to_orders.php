<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('status_id');
            $table->decimal('amount');
            $table->string('user_name');
            $table->string('user_email')->nullable();
            $table->string('user_phone');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('street');
            $table->string('house_no');
            $table->string('building');
            $table->string('flat_no');
            $table->string('post_code');
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('status_id');
            $table->dropColumn('amount');
            $table->dropColumn('user_name');
            $table->dropColumn('user_email');
            $table->dropColumn('user_phone');
            $table->dropColumn('country');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('street');
            $table->dropColumn('house_no');
            $table->dropColumn('building');
            $table->dropColumn('flat_no');
            $table->dropColumn('post_code');
            $table->dropColumn('comment');
        });
    }
}
