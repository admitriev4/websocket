<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class AddUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('users')->insert([
            'name' => 'Александр',
            'email' => 'a.dmitriev@mail.ru',
            'email_verified_at' =>date("Y-m-d H:i:s"),
            'password' => Hash::make('Ss1Ss1_21'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'name' => 'Дмитрий',
            'email' => 'd.dmitriev@mail.ru',
            'email_verified_at' =>date("Y-m-d H:i:s"),
            'password' => Hash::make('Ss1Ss1_21'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('users')->where('email', '=', 'a.dmitriev@mail.ru')->delete();
        DB::table('users')->where('email', '=', 'd.dmitriev@mail.ru')->delete();
    }
}
