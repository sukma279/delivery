<?php

use Phalcon\Mvc\Collection;

class DataCustomer extends Collection
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
    public $nama_pemesan;

    /**
     *
     * @var string
     */
    public $alamat;

    /**
     *
     * @var string
     */
    public $kabupaten;

    /**
     *
     * @var integer
     */
    public $no_tlp;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'data_customer';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataCustomer[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataCustomer
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
