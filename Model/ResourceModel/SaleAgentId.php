<?php
 
namespace AHT\SA\Model\ResourceModel;
 
class SaleAgentId extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('sales_agent_commission', 'entity_id');
    }
}