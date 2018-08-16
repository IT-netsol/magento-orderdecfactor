<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */

namespace Netsolution\Orderdecfactor\Model;

use Magento\Framework\Model\AbstractModel;

class Orderdecfactor extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Netsolution\Orderdecfactor\Model\ResourceModel\Orderdecfactor');
    }
}