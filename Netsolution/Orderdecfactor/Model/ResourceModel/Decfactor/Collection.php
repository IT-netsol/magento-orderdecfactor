<?php
 
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */
 
namespace Netsolution\Orderdecfactor\Model\ResourceModel\Decfactor;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
   
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('Netsolution\Orderdecfactor\Model\Decfactor', 'Netsolution\Orderdecfactor\Model\ResourceModel\Decfactor');
    }
}