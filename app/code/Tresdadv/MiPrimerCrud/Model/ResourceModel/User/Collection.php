<?php
namespace Tresdadv\MiPrimerCrud\Model\ResourceModel\User;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'user_id';
	protected $_eventPrefix = 'tresdadv_miprimercrud_user_collection';
	protected $_eventObject = 'user_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Tresdadv\MiPrimerCrud\Model\User', 'Tresdadv\MiPrimerCrud\Model\ResourceModel\User');
	}

}
