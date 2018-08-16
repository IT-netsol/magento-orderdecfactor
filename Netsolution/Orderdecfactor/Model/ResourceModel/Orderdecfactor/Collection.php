<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */

namespace Netsolution\Orderdecfactor\Model\ResourceModel\Orderdecfactor;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'orderdecfactor_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Netsolution\Orderdecfactor\Model\Orderdecfactor',
            'Netsolution\Orderdecfactor\Model\ResourceModel\Orderdecfactor'
        );
    }
}