<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->makeAdministrator();
    }

    protected function makeAdministrator()
    {
        return User::create([
            'name' => 'admin',
            'email' => 'admin@somewhere.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
