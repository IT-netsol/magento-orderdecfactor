<?php
 
 /**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */
 
namespace Netsolution\Orderdecfactor\Model;
 
use Netsolution\Orderdecfactor\Api\Data\DecfactorInterface;
 
class Decfactor extends \Magento\Framework\Model\AbstractModel implements DecfactorInterface
{
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Netsolution\Orderdecfactor\Model\ResourceModel\Orderdecfactor');
    }
}