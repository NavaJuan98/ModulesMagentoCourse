<?php
namespace Tresdadv\MiPrimerCrud\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	protected $_userFactory;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Tresdadv\MiPrimerCrud\Model\UserFactory $userFactory
		)
	{
		$this->_userFactory = $userFactory;
		parent::__construct($context);
	}

	public function sayHelloCrud()
	{
		return __('Hola desde el sayHelloCrud!.');
	}

	public function getUserCollection(){
		$user = $this->_userFactory->create();
		return $user->getCollection();
	}
}