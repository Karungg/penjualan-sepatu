<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'product_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type'       => 'TEXT',
                'null'       => true
            ],
            'product_price' => [
                'type'       => 'INT',
            ],
            'id_category' => [
                'type'       => 'INT',
                'unsigned' => true
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_category', 'categories', 'id');
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropForeignKey('products', 'id_category');
        $this->forge->dropTable('products');
    }
}
