<?php
require_once('Entity.php');
class Rewiew extends CEntity
{
    protected $entity = 'review';
    public function __construct($data = false)
    {
        parent::__construct($data);
    }
}