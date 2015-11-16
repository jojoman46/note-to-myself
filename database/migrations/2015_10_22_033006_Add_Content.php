<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('user_content')->insert(array(
            'id'=>'0',
            'notes'=>'notes text',
            'websites'=>'http://temp.com',
            'images'=>'images/temp/test.png',
            'tbd'=>'g55h7e3e3x1',
            'remember_token'=>'0',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
