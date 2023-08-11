<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'admin@mail.com',
            'password' => password_hash('12345678', PASSWORD_DEFAULT)
        ];

        $this->db->table('admin')->insert($data);
    }
}
