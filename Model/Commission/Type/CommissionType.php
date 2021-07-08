<?php
namespace AHT\SA\Model\Commission\Type;

class CommissionType extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions() {
        if ($this->_options === null) {
            $this->_options = [
                ['label' => __('Please select'), 'value' => ''],
                ['label' => __('fixed'), 'value' => 1],
                ['label' => __('percent'), 'value' => 2]
            ];
        }
        return $this->_options;
    }
}