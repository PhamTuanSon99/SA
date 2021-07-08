<?php
namespace AHT\SA\Model\ResourceModel\Sa;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\SA\Model\Search\Id\SaleAgentId', 'AHT\SA\Model\ResourceModel\SaleAgentId');
    }
}
