<?php
    class Model_User extends ORM {
        protected $_belongs_to = array(
            'components' => array(
                'model' => 'component',
                'foreign_key' => 'owner_id',
            )
        );
    }

?>