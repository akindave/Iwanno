<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('org_id')->unsigned();
            $table->string('post_title')->unique();
            $table->string('code')->unique();
            $table->enum('status',['0','1']);
            $table->foreign('org_id')->references('id')->on('users');
            $table->timestamps();
        });

        DB::table('contents')->insert(array('org_id'=>1,
                                            'post_title'=>'Resumption',
                                            'code' => '#289892',
                                            'status' => '0'
                                            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
