<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Courses extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'course_code' => array(
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'unique'     => TRUE
            ),
            'course_name' => array(
                'type'       => 'VARCHAR',
                'constraint' => 100
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => TRUE
            ),
            'created_at' => array(
                'type' => 'DATETIME',
                'null' => TRUE
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('courses');
    }

    public function down()
    {
        $this->dbforge->drop_table('courses');
    }
}