<?php

class m140214_162558_tables extends CDbMigration
{
	public function up()
	{
		 $this->createTable('notes', array(
            'id' => 'pk',
            'notes_name' => 'text',
            'notes_value' => 'text',
            'notes_author'=>'text',
            'notes_update'=>'DATETIME',
            'author_id'=>'integer',
           
        ),'ENGINE = InnoDB');


		$this->createTable('comment', array(
            'id' => 'pk',
            'comment_author' => 'text',
            'comment_text' => 'text',
            'notes_id'=>'integer',
            'author_id'=>'integer',
            'verifyCode'=>'text',
            'time_comment'=>'DATETIME',
           
        ),'ENGINE = InnoDB');


        $this->createTable('users', array(
            'id' => 'pk',
            'username' => 'text',
            'password' => 'text',
            'last_login_time'=>'TIMESTAMP',
            
        ),'ENGINE = InnoDB');

        $this->execute("ALTER TABLE `notes` ADD FOREIGN KEY ( `author_id` ) REFERENCES `text_notes`.`users` (`id`)
         ON DELETE CASCADE ON UPDATE RESTRICT");
        
        $this->execute("ALTER TABLE `comment` ADD FOREIGN KEY ( `notes_id` ) REFERENCES `text_notes`.`notes` (`id`)
         ON DELETE CASCADE ON UPDATE RESTRICT");

        $this->execute("ALTER TABLE `comment` ADD FOREIGN KEY ( `author_id` ) REFERENCES `text_notes`.`notes` (`author_id`)
         ON DELETE CASCADE ON UPDATE RESTRICT");
 
 
	

	}

	public function down()
	{
		echo "m140214_162558_tables does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}