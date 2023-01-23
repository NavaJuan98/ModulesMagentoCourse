<?php
namespace TresdTech\FinalProject\Model;
class User extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'tresdtech_finalproject_user';

	protected $_cacheTag = 'tresdtech_finalproject_user';

	protected $_eventPrefix = 'tresdtech_finalproject_user';

	protected function _construct()
	{
		$this->_init('TresdTech\FinalProject\Model\ResourceModel\User');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}