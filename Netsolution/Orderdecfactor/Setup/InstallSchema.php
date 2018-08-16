<?php
/**
 * @category   Netsolution
 * @package    Netsolution_Orderdecfactor
 * @author     surabhi
 */

namespace Netsolution\Orderdecfactor\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
		$installer = $setup;
		$installer->startSetup();

		/**
		 * Creating table netsolution_orderdecfactor
		 */
		$table = $installer->getConnection()->newTable(
			$installer->getTable('netsolution_orderdecfactor')
		)->addColumn(
			'orderdecfactor_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
			'Entity Id'
		)->addColumn(
			'order_id',
			\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
			null,
			['nullable' => true],
			'Order Id'
		)->addColumn(
			'decimal_factor',
			\Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
			'10,2',
			['nullable' => true,'default' => null],
			'Decimal Factor'
		)->addColumn(
			'order_amount',
			\Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
			'14,2',
			['nullable' => true,'default' => null],
			'Order Amount'
		)->addColumn(
			'final_value',
			\Magento\Framework\DB\Ddl\Table::TYPE_DECIMAL,
			'14,2',
			['nullable' => true,'default' => null],
			'Final Value'
		);
		$installer->getConnection()->createTable($table);
		$installer->endSetup();
	}
}