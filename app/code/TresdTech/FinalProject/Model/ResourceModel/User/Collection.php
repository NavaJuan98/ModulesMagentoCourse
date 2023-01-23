<?php
namespace TresdTech\FinalProject\Model\ResourceModel\User;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'tresdtech_finalproject_user_collection';
	protected $_eventObject = 'user_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('TresdTech\FinalProject\Model\User', 'TresdTech\FinalProject\Model\ResourceModel\User');
	}

}
