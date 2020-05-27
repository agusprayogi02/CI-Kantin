<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {

        // Uncomment below if want config
        $this->forge->addField([
            'id'                  => [
                'type'           => 'INT',
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'fullname'          => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'gender'        => [
                'type'              => 'VARCHAR',
                'constraint'        => 15
            ],
            'jenjang'       => [
                'type'              => 'VARCHAR',
                'constraint'        => 15
            ],
            'phone'         => [
                'type'              => 'VARCHAR',
                'constraint'        => 13,
            ]
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('user');
    }

    public function down()
    {
        // $this->forge->dropTable('user');
    }
}
