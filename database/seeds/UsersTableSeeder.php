<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = App\User::create([
        	'name' => 'admin',
        	'email' => 'admin@karkhana.asia',
        	'password' => bcrypt('karkhana_admin09'),
        	'admin' => 1,
        	'supervisor' => 0,
        	'approved' => 1
        ]);

        App\Profile::create([
        	'user_id' => $user->id,
        	'about' => 'This guy is the awesome admin!',
        	'avatar' => '/uploads/avatars/default.png'
        ]);

    }
}
