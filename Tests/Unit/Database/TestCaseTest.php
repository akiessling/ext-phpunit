<?php
/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Test case.
 *
 * These test cases require that the following extensions are installed:
 *  1. aaa
 *  2. bbb (depends on aaa and alters aaa' tables)
 *  3. ccc (depends on bbb)
 *  4. ddd (depends on bbb)
 *
 * @package TYPO3
 * @subpackage tx_phpunit
 *
 * @author Kasper Ligaard <kasperligaard@gmail.com>
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class Tx_Phpunit_Database_TestCaseTest extends Tx_Phpunit_Database_TestCase {
	/**
	 * @var string
	 */
	const DB_PERMISSIONS_MESSAGE
		= 'Please make sure that the current DB user has global SELECT, INSERT, CREATE, ALTER and DROP permissions.';

	/**
	 * @var DatabaseConnection
	 */
	protected $db = NULL;

	public function setUp() {
		$this->createDatabaseAndCheckResult();
		$this->db = $this->useTestDatabase();
	}

	public function tearDown() {
		$this->dropDatabasedAndCheckResult();
		$this->switchToTypo3Database();

		unset($this->db);
	}

	/*
	 * Utility functions
	 */

	/**
	 * Marks the current test as skipped, mentioning the necessary DB privileges.
	 *
	 * @return void
	 */
	protected function markTestAsSkipped() {
		$this->markTestSkipped(self::DB_PERMISSIONS_MESSAGE);
	}

	/**
	 * Creates the test database and checks the result.
	 *
	 * If the test database cannot be created, the current test will be marked as skipped.
	 *
	 * @return void
	 */
	protected function createDatabaseAndCheckResult() {
		if (!$this->createDatabase()) {
			$this->markTestAsSkipped();
		}
	}

	/**
	 * Drops the test database and checks the result.
	 *
	 * If the test database cannot be dropped, the current test will be marked as skipped.
	 *
	 * @return void
	 */
	protected function dropDatabasedAndCheckResult() {
		if (!$this->dropDatabase()) {
			$this->markTestAsSkipped();
		}
	}

	/**
	 * @test
	 */
	public function cleaningDatabase() {
		$this->importExtensions(array('extbase'));

		/** @var $res mysqli_result|resource */
		$res = $this->db->sql_query('show tables');
		$rows = $this->db->sql_num_rows($res);
		$this->assertNotEquals(0, $rows);

			// Check DROP privilege as it is needed for clean up
		$this->dropDatabasedAndCheckResult();
		$this->createDatabase();
		$this->cleanDatabase();
		/** @var $res mysqli_result|resource */
		$res = $this->db->sql_query('show tables');

		$this->assertSame(
			0,
			$this->db->sql_num_rows($res)
		);
	}

	/**
	 * @test
	 */
	public function importingExtension() {
		$this->importExtensions(array('extbase'));

		/** @var $res mysqli_result|resource */
		$res = $this->db->sql_query('show tables');
		$rows = $this->db->sql_num_rows($res);

		$this->assertNotSame(
			0,
			$rows
		);
	}

	/**
	 * @test
	 */
	public function extensionAlteringTable() {
		if (!ExtensionManagementUtility::isLoaded('aaa') || !ExtensionManagementUtility::isLoaded('bbb')) {
			$this->markTestSkipped(
				'This test can only be run if the extensions aaa and bbb ' .
					'from tests/res are installed.'
			);
		}

		$this->importExtensions(array('bbb'), TRUE);

		$tableNames = $this->getDatabaseTables();
		$this->assertContains(
			'tx_bbb_test',
			$tableNames,
			'Check that extension bbb is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.'
		);
		$this->assertContains(
			'tx_aaa_test',
			$tableNames,
			'Check that extension aaa is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.'
		);

		// extension BBB extends an AAA table
		$columns = $this->db->admin_get_fields('tx_aaa_test');
		$this->assertContains(
			'tx_bbb_test',
			array_keys($columns),
			self::DB_PERMISSIONS_MESSAGE
		);
	}

	/**
	 * @test
	 */
	public function recursiveImportingExtensions() {
		if (!ExtensionManagementUtility::isLoaded('aaa') || !ExtensionManagementUtility::isLoaded('bbb')
			|| !ExtensionManagementUtility::isLoaded('ccc')
		) {
			$this->markTestSkipped(
				'This test can only be run if the extensions aaa, bbb and ccc ' .
					'from tests/res are installed.'
			);
		}

		$this->importExtensions(array('ccc', 'aaa'), TRUE);

		$tableNames = $this->getDatabaseTables();

		$this->assertContains('tx_ccc_test', $tableNames, 'Check that extension ccc is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.');
		$this->assertContains('tx_bbb_test', $tableNames, 'Check that extension bbb is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.');
		$this->assertContains('tx_aaa_test', $tableNames, 'Check that extension aaa is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.');
	}

	/**
	 * @test
	 */
	public function skippingDependencyExtensions() {
		if (!ExtensionManagementUtility::isLoaded('aaa') || !ExtensionManagementUtility::isLoaded('bbb')
			|| !ExtensionManagementUtility::isLoaded('ccc') || !ExtensionManagementUtility::isLoaded('ddd')
		) {
			$this->markTestSkipped(
				'This test can only be run if the extensions aaa, bbb, ccc ' .
					'and ddd from tests/res are installed.'
			);
		}

		$toSkip = array('bbb');
		$this->importExtensions(array('ccc', 'ddd'), TRUE, $toSkip);

		$tableNames = $this->getDatabaseTables();

		$this->assertContains('tx_ccc_test', $tableNames, 'Check that extension ccc is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.');
		$this->assertContains('tx_ddd_test', $tableNames, 'Check that extension ddd is installed. The extension can be found in Tests/Unit/Fixtures/Extensions/.');
		$this->assertNotContains(
			'tx_bbb_test',
			$tableNames,
			self::DB_PERMISSIONS_MESSAGE
		);
		$this->assertNotContains('tx_aaa_test', $tableNames);
	}

	/**
	 * @test
	 */
	public function importingDataSet() {
		if (!ExtensionManagementUtility::isLoaded('ccc')) {
			$this->markTestSkipped(
				'This test can only be run if the extension ccc from ' .
					'tests/res is installed.'
			);
		}

		$this->importExtensions(array('ccc'));
		$this->importDataSet(ExtensionManagementUtility::extPath('phpunit') . 'Tests/Unit/Database/Fixtures/DataSet.xml');

		$result = $this->db->exec_SELECTgetRows('*', 'tx_ccc_test', NULL);
		$this->assertSame(
			2,
			count($result),
			self::DB_PERMISSIONS_MESSAGE
		);
		$this->assertSame(
			'1',
			$result[0]['uid']
		);
		$this->assertSame(
			'2',
			$result[1]['uid']
		);

		$result = $this->db->exec_SELECTgetRows('*', 'tx_ccc_data', NULL);
		$this->assertSame(
			1,
			count($result)
		);
		$this->assertSame(
			'1',
			$result[0]['uid']
		);

		$result = $this->db->exec_SELECTgetRows('*', 'tx_ccc_data_test_mm', NULL);
		$this->assertSame(
			2,
			count($result)
		);
		$this->assertSame(
			'1',
			$result[0]['uid_local']
		);
		$this->assertSame(
			'1',
			$result[0]['uid_foreign']
		);
		$this->assertSame(
			'1',
			$result[1]['uid_local']
		);
		$this->assertSame(
			'2',
			$result[1]['uid_foreign']
		);
	}
}