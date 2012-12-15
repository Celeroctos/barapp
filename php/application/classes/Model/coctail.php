<?php
class Model_Coctail extends ORM {
    protected $_has_many = array(
        'coctailscomponents' => array(
            'model' => 'coctailscomponent',
            'foreign_key' => 'id',
        )
    );
}

?>