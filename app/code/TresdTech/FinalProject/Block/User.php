<?php
namespace TresdTech\FinalProject\Block;
use Magento\Framework\Controller\ResultFactory;

class User extends \Magento\Framework\View\Element\Template
{
	protected $resultFactory;
	protected $_userFactory;

    public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\TresdTech\FinalProject\Model\UserFactory $userFactory,
		\Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory

		)
	{
		$this->resultRedirectFactory = $resultRedirectFactory;
		$this->_userFactory = $userFactory;
		parent::__construct($context);
	}   

	public function getUserCollection(){
		$user = $this->_userFactory->create();
		return $user->getCollection();
	}

	public function getCount(){
		$user = $this->_userFactory->create();
		return $user->getCollection()->count();
	}


}