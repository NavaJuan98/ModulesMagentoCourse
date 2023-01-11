<?php
namespace Tresdadv\MiPrimerCrud\Model;
class User extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'tresdadv_miprimercrud_user';

	protected $_cacheTag = 'tresdadv_miprimercrud_user';

	protected $_eventPrefix = 'tresdadv_miprimercrud_user';

	protected function _construct()
	{
		$this->_init('Tresdadv\MiPrimerCrud\Model\ResourceModel\User');
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