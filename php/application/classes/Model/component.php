<?php
class Model_Component extends ORM {
    protected $_has_one = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'id'
        )
    );
}

?>