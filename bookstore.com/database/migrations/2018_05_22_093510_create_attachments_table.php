<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('mime');
            $table->string('path');
            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')
            ->on('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::table('attachments',function (Blueprint $table){
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('attachments');  
    }
}


