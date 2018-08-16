<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */
namespace Netsolution\Orderdecfactor\Model\ResourceModel;
 
/**
 * Decfactor  mysql resource.
 */
class Decfactor extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
 
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('netsol_decfactor', 'entity_id');
    }
}