<?php
/***************************************************************
* Copyright notice
*
* (c) 2010 Oliver Klee <typo3-coding@oliverklee.de>
* All rights reserved
*
* This script is part of the TYPO3 project. The TYPO3 project is
* free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* The GNU General Public License can be found at
* http://www.gnu.org/copyleft/gpl.html.
*
* This script is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * This class provides functions for finding testcases.
 *
 * @package TYPO3
 * @subpackage tx_phpunit
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class Tx_Phpunit_Service_TestFinder implements t3lib_Singleton {
	/**
	 * The destructor.
	 */
	public function __destruct() {
	}

	/**
	 * Gets the path of the TYPO3 Core unit tests relative to PATH_site.
	 *
	 * If there is no tests directory for the Core, this function will return an empty string.
	 *
	 * @return string
	 *         the path of the TYPO3 Core unit tests relative to PATH_site,
	 *         will be empty if there is no Core tests directory
	 */
	public function getRelativeCoreTestsPath() {
		$possibleTestsPath1 = 'tests/';
		$possibleTestsPath2 = 'typo3_src/tests/';

		if (file_exists(PATH_site .  $possibleTestsPath1)) {
			$testsPath = $possibleTestsPath1;
		} elseif (file_exists(PATH_site . $possibleTestsPath2)) {
			$testsPath = $possibleTestsPath2;
		} else {
			$testsPath = '';
		}

		return $testsPath;
	}

	/**
	 * Gets the absolute path of the TYPO3 Core unit tests.
	 *
	 * If there is no tests directory for the Core, this function will return an empty string.
	 *
	 * @return string
	 *         the absolute path of the TYPO3 Core unit tests,
	 *         will be empty if there is no Core tests directory
	 */
	public function getAbsoluteCoreTestsPath() {
		if (!$this->hasCoreTests()) {
			return '';
		}

		return PATH_site . $this->getRelativeCoreTestsPath();
	}

	/**
	 * Checks whether the TYPO3 Core has a tests directory.
	 *
	 * @return boolean TRUE if the TYPO3 Core has a tests directory, FALSE otherwise
	 */
	public function hasCoreTests() {
		return ($this->getRelativeCoreTestsPath() !== '');
	}

	/**
	 * Finds all files that are named like test files in the directory $directory
	 * and recursively all its subdirectories.
	 *
	 * @param string $directory
	 *        the absolute path of the directory in which to look for test cases
	 *
	 * @return array
	 *         sorted file names of the testcases in the directory $directory relative
	 *         to $directory, will be empty if no testcases have been found
	 */
	public function findTestCasesInDirectory($directory) {
		if ($directory === '') {
			throw new InvalidArgumentException('$directory must not be empty.');
		}
		if (!is_dir($directory)) {
			throw new InvalidArgumentException('The directory '. $directory . ' does not exist.');
		}
		if (!is_readable($directory)) {
			throw new InvalidArgumentException('The directory '. $directory . ' exists, but is not readable.');
		}

		$directoryLength = strlen($directory);

		$testFiles = array();
		$allPhpFiles = t3lib_div::getAllFilesAndFoldersInPath(array(), $directory, 'php');
		foreach ($allPhpFiles as $filePath) {
			if ($this->isTestCaseFileName($filePath)) {
				$testFiles[] = substr($filePath, $directoryLength);;
			}
		}

		sort($testFiles, SORT_STRING);

		return $testFiles;
	}

	/**
	 * Checks whether a file name is named like a testcase file name should be.
	 *
	 * @param string $path the absolute path of a file to check
	 *
	 * @return boolean TRUE if $fileName is names like a proper testcase, FALSE otherwise
	 */
	protected function isTestCaseFileName($path) {
		return (substr($path, -8) === 'Test.php') || (substr($path, -12) === 'testcase.php');
	}
}
?>