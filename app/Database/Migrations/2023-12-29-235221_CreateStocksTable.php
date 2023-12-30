<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStocksTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_product' => [
                'type'       => 'INT',
                'unsigned' => true,
            ],
            'size' => [
                'type'       => 'VARCHAR',
                'constraint' => '2'
            ],
            'quantity' => [
                'type'       => 'INT',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_product', 'products', 'id');
        $this->forge->createTable('stocks');
    }

    public function down()
    {
        $this->forge->dropForeignKey('stocks', 'id_product');
        $this->forge->dropTable('stocks');
    }
}
