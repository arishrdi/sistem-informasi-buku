<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengunjung extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengunjung' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_pengunjung', true);
        $this->forge->createTable('pengunjung');
    }

    public function down()
    {
        $this->forge->dropTable('pengunjung');
    }
}
