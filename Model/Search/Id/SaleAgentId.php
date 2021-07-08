<?php
namespace AHT\SA\Model\Search\Id;

class SaleAgentId extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'aht_sa_sale_agent_id';

    /**
     * Model cache tag for clear cache in after save and after delete
     *
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'sale_agent_id';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('AHT\SA\Model\ResourceModel\SaleAgentId');
    }

    /**
     * Return a unique id for the model.
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getAllOptions() {
        $options = [];

        $customerFactory = $this->_customerFactory->create();        
        $arrList = $customerFactory->getCollection()->addFieldToFilter('is_sales_agent', 1);

        foreach($arrList as $value) {
            $fullname = $value->getFirstName() . " " . $value->getMiddleName() . " " . $value->getLastName();

            $options[] = [
                'value' => $value->getId(),
                'label' => $fullname,
            ];
        }

        return $options;
    }
}
