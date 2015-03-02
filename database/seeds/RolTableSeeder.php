<?php
/**
 * Created by PhpStorm.
 * User: ajax
 * Date: 02-16-15
 * Time: 02:01 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Rol;

class RolTableSeeder extends Seeder{
	public function run(){
		DB::table('rol')->delete();

		Rol::create([
			'rol' => 'admin',
		]);

	}
}
