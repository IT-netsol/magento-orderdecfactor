<?php
/**
 * Netsolution Updateorderdata observer
 *
 *@category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 *
 */
namespace Netsolution\Orderdecfactor\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\App\RequestInterface;
use Netsolution\Orderdecfactor\Model\DecfactorFactory;

class Updateorderdata implements ObserverInterface
{
    protected $scopeConfig;
    protected $decfactor;
 
    public function __construct(\Netsolution\Orderdecfactor\Model\DecfactorFactory  $decfactor,\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        $this->scopeConfig = $scopeConfig;
        $this->decfactor = $decfactor;
    }

	public function execute(\Magento\Framework\Event\Observer $observer) {
	
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORES;
	    $moduleEnable = $this->scopeConfig->getValue("decfactor/general/enable", $storeScope);
        $decimalFactor = $this->scopeConfig->getValue("decfactor/general/decimal_factor", $storeScope);
        if(isset($moduleEnable) && $moduleEnable == 1){
            //Load Observer Data and get Order Value
            $order = $observer->getEvent()->getOrder();
            $orderData = $order->getData();
            $orderState = $orderData['state'];
            $orderId =  $orderData['increment_id'];
            $orderAmount =  $orderData['grand_total'];
            //We have taken processing because it is the state that we got when the order amount is totally paid
            if($orderState == "processing"){
                /**If decimal factor is set from admin */
                if($decimalFactor != ''){
                    $model = $this->decfactor->create();
                    $finalValue = $orderAmount*$decimalFactor;
                    $model->addData([
                        "order_id" => $orderId,
                        "decimal_factor" =>$decimalFactor,
                        "order_amount" => $orderAmount,
                        "final_value" => $finalValue
                        ]);
                    $saveData = $model->save();
               }

            }

          



        }

       


       









    }

}
