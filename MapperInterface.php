<?php
/**
 * Created by PhpStorm.
 * User: tunde
 * Date: 6/27/17
 * Time: 4:49 PM
 */

interface MapperInterface{

    function findById($id);

    function save();

    function loadClassProperties();
}