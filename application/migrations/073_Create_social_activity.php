<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Migration_Create_social_activity  extends CI_Migration {

    private $_table = 'social_activity';

    public function up() {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'null' => TRUE,
                'unsigned' => TRUE,
            ),
            'social' => array(
                'type' => 'ENUM("facebook", "twitter", "instagram")',
                'null' => TRUE,
            ),
            'original_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'created_at' => array(
                'type' => 'INT',
                'null' => TRUE,
                'unsigned' => TRUE,
            ),
            'message' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'creator_id' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'likes' => array(
                'type' => 'INT',
                'constraint' => '100',
                'null' => TRUE,
            ),
            'creator_image_url' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE,
            ),
            'other_fields' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table($this->_table, TRUE);
    }

    public function down() {
        $this->dbforge->drop_table($this->_table);
    }

}