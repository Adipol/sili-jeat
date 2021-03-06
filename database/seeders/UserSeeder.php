<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::Create([
            'name' => 'siri',
            'email' => 'siri@email.com',
            'password' => bcrypt('siri123456'),
            'entity_id' => '1'
        ]);

        $user->assignRole('Admin');

        $user1 = User::Create([
            'name' => 'cliente',
            'email' => 'cliente@email.com',
            'password' => bcrypt('clienteamlc'),
            'entity_id' => '1'
        ]);

        $user1->assignRole('Cliente');

        $user2 = User::Create([
            'name' => 'cliente',
            'email' => 'cliente.honduras@email.com',
            'password' => bcrypt('clienteamlc'),
            'entity_id' => '1'
        ]);

        $user2->assignRole('Cliente Honduras');
    }
}
