<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_submissions extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => TRUE
            ],
            'quiz_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => TRUE
            ],
            'score' => [
                'type'       => 'INT',
                'constraint' => 11
            ],
            'submitted_at' => [
                'type' => 'DATETIME',
                'null' => TRUE
            ]
        ]);

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('submissions');
    }

    public function down()
    {
        $this->dbforge->drop_table('submissions');
    }
}