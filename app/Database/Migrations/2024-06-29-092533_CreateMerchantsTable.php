<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMerchantsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'CHAR',
                'constraint' => 36,
            ],
            'user_id' => [
                'type' => 'CHAR',
                'constraint' => 36,
            ],
            'store_id' => [
                'type' => 'CHAR',
                'constraint' => 36,
            ],
            'is_delete' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('store_id', 'stores', 'id');
        $this->forge->createTable('merchants', true);
    }

    public function down()
    {
        $this->forge->dropTable('merchants', true);
    }
}
