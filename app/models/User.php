<?php

use Phalcon\Mvc\Collection;

class User extends Collection
{
	public function getSource()
    {
        return 'user';
    }
}
