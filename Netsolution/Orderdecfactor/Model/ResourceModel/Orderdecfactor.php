<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */

namespace Netsolution\Orderdecfactor\Model\ResourceModel;

class Orderdecfactor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('netsolution_orderdecfactor', 'orderdecfactor_id');   //here "netsolution_orderdecfactor" is table name and "orderdecfactor_id" is the primary key of table
    }
}