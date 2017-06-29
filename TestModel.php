<?php
/**
 * Created by PhpStorm.
 * User: tunde
 * Date: 6/28/17
 * Time: 11:47 PM
 */

class TestModel extends ORMMapper{

    private $tableName = 'users';

    function __construct()
    {
        parent::__construct();
        parent::setTableName($this->tableName);
    }
}