<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */

namespace Netsolution\Orderdecfactor\Controller\Adminhtml\Items;

class Index extends \Netsolution\Orderdecfactor\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Netsolution_Orderdecfactor::test');
        $resultPage->getConfig()->getTitle()->prepend(__('Order Details'));
        $resultPage->addBreadcrumb(__('Order Details'), __('Order Details'));
        $resultPage->addBreadcrumb(__('Order Details'), __('Order Details'));
        return $resultPage;
    }
}