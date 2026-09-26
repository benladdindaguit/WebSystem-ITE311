<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Quizzes extends CI_Migration
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
            'lesson_id' => array(
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => TRUE
            ),
            'question' => array(
                'type' => 'TEXT'
            ),
            'choice_a' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255
            ),
            'choice_b' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255
            ),
            'choice_c' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255
            ),
            'choice_d' => array(
                'type'       => 'VARCHAR',
                'constraint' => 255
            ),
            'correct_answer' => array(
                'type'       => 'VARCHAR',
                'constraint' => 1
            )
        ));

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('lesson_id');

        $this->dbforge->create_table('quizzes');
    }

    public function down()
    {
        $this->dbforge->drop_table('quizzes');
    }
}