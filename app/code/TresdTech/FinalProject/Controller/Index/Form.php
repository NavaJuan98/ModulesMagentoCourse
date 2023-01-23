<?php
namespace TresdTech\FinalProject\Controller\Index;

class Form extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_userFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory,	
		\TresdTech\FinalProject\Model\UserFactory $userFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		$this->_userFactory = $userFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		$data = $this->getRequest()->getPost();
        if (
			$data["first_name"] != NULL &&
			$data["last_name"] != NULL &&
			$data["email"] != NULL &&
			$data["telephone"] != NULL 
		) {
			$user = $this->_userFactory->create();
			$user->setFirstName($data["first_name"]);
			$user->setLastName($data["last_name"]);
			$user->setEmail($data["email"]);
			$user->setTelephone($data["telephone"]);
			if($user->save()) {
				$this->messageManager->addSuccess(__('User Added Successfully.'));
			}else {
				$this->messageManager->addError(__('Data was not saved.'));
			}

        }
		return $this->_pageFactory->create();
		
	}
}
