<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomPageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_page', function(Blueprint $table)
        {
            $table->increments('id');
            $table->char('platform', 10)->default('pc')->comment('所属平台');
            $table->char('page', 50)->comment('页面');
            $table->char('key', 30)->comment('ID');
            $table->string('name', 32)->default('')->comment('名称');
            $table->text('content', 65535)->comment('数据');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['platform','page','key'], 'unique_pay_key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('custom_page');
    }

}
