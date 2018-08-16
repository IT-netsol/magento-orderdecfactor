<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */

namespace Netsolution\Orderdecfactor\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Order Details');
        $this->_addButtonLabel = __('Add New Item');
        parent::_construct();
    }
}
