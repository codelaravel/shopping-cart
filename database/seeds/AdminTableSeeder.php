<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = new App\User([
        'name'     => 'Admin',
        'email'    => 'admin@admin.com',
        'password' => Hash::make('admin'),
        'avatar'   => 'admin.jpg',
        'is_admin' => true
      ]);
      $admin->save();
    }
}
