<?php
namespace TresdTech\FinalProject\Controller\Index;

class User extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
		)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}

	public function redirectToForm() {
		$resultRedirect = $this->resultRedirectFactory->create();
		$url = 'http://192.168.0.16/finalproject/index/form';
		$resultRedirect->setUrl($url);
		return $resultRedirect;
	}	

}