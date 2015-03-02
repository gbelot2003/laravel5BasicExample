<?php
/**
 * Created by PhpStorm.
 * User: ajax
 * Date: 02-16-15
 * Time: 02:01 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTableSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();

        User::create([
            'name' => 'gbelot2003',
			'rol_id' => 1,
            'email' => 'gbelot2003@hotmail.com',
            'password' => Hash::make('Luna0102'),
        ]);


    }
}
