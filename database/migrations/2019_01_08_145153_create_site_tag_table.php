<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('site_id')->references('id')->on('sites');
            $table->unsignedInteger('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('site_tag');
    }

    /**
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
