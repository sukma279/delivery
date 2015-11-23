<?php

use Phalcon\Mvc\Collection;

class User extends Collection
{
	/**
     *
     * @var integer
     */
    public $_id;
 
    /**
     *
     * @var string
     */
    public $username;
 
    /**
     *
     * @var string
     */
    public $password;
}
