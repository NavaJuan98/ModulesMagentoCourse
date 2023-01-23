<?php
namespace TresdTech\FinalProject\Setup;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{

	public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
	{
		$installer = $setup;
		$installer->startSetup();
		if (!$installer->tableExists('tresdtech_finalproject_user')) {
			$table = $installer->getConnection()->newTable(
				$installer->getTable('tresdtech_finalproject_user')
			)
				->addColumn(
					'id',
					\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
					null,
					[
						'identity' => true,
						'nullable' => false,
						'primary'  => true,
						'unsigned' => true,
					],
					'User ID'
				)
				->addColumn(
					'first_name',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable'=>false,'default'=>"NULL"],
					'First Name'
				)
				->addColumn(
					'last_name',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable'=>false,'default'=>"NULL"],
					'Last Name'
				)
				->addColumn(
					'email',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable'=>false,'default'=>"NULL"],
					'Email User'
				)
				->addColumn(
					'telephone',
					\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
					255,
					['nullable'=>false,'default'=>"NULL"],
					'Tel User'
				)
				->addColumn(
						'created_at',
						\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
						null,
						['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
						'Created At'
				)->addColumn(
					'updated_at',
					\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
					null,
					['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
					'Updated At')
				->setComment('User Table');
			$installer->getConnection()->createTable($table);

		}
		$installer->endSetup();
	}
}