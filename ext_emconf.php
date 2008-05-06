<?php

########################################################################
# Extension Manager/Repository config file for ext: "phpunit"
#
# Auto generated 06-05-2008 11:30
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'PHPUnit',
	'description' => 'TYPO3 unit testing UI based on PHPUnit ver. 3.2 by Sebastian Bergmann. Part of the ECT effort (Extension Coordination Team).',
	'category' => 'module',
	'shy' => 0,
	'version' => '3.2.20',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Kasper Ligaard',
	'author_email' => 'ligaard@systime.dk',
	'author_company' => 'GT3',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.1-0.0.0',
			'typo3' => '4.1-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'pear' => '2.3.5-0.0.0',
			'oelib' => '0.4.0-0.0.0',
		),
	),
	'_md5_values_when_last_written' => 'a:404:{s:9:"Changelog";s:4:"d41d";s:4:"NEWS";s:4:"3f20";s:4:"TODO";s:4:"1d22";s:38:"class.tx_phpunit_database_testcase.php";s:4:"a7a7";s:29:"class.tx_phpunit_testcase.php";s:4:"14c3";s:33:"class.tx_phpunit_testlistener.php";s:4:"c4ce";s:21:"ext_conf_template.txt";s:4:"5bdc";s:12:"ext_icon.gif";s:4:"5f50";s:17:"ext_localconf.php";s:4:"708c";s:14:"ext_tables.php";s:4:"2fe8";s:14:"doc/manual.sxw";s:4:"b88a";s:27:"tests/database_testcase.php";s:4:"bf3e";s:35:"tests/database_testcase_dataset.xml";s:4:"0651";s:34:"tests/tx_phpunit_test_testcase.php";s:4:"92e4";s:30:"tests/tx_phpunit_testsuite.php";s:4:"94a7";s:33:"tests/tx_t3unit_test_testcase.php";s:4:"645e";s:23:"tests/res/ccc/ChangeLog";s:4:"6901";s:24:"tests/res/ccc/README.txt";s:4:"ee2d";s:28:"tests/res/ccc/ext_emconf.php";s:4:"1dc9";s:26:"tests/res/ccc/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/ccc/ext_tables.php";s:4:"7b15";s:28:"tests/res/ccc/ext_tables.sql";s:4:"ed29";s:34:"tests/res/ccc/icon_tx_ccc_data.gif";s:4:"475a";s:34:"tests/res/ccc/icon_tx_ccc_test.gif";s:4:"475a";s:30:"tests/res/ccc/locallang_db.xml";s:4:"4f69";s:21:"tests/res/ccc/tca.php";s:4:"eb30";s:33:"tests/res/ccc/doc/wizard_form.dat";s:4:"5b6a";s:34:"tests/res/ccc/doc/wizard_form.html";s:4:"79f5";s:23:"tests/res/aaa/ChangeLog";s:4:"661e";s:24:"tests/res/aaa/README.txt";s:4:"ee2d";s:28:"tests/res/aaa/ext_emconf.php";s:4:"c526";s:26:"tests/res/aaa/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/aaa/ext_tables.php";s:4:"6a79";s:28:"tests/res/aaa/ext_tables.sql";s:4:"1764";s:34:"tests/res/aaa/icon_tx_aaa_test.gif";s:4:"475a";s:30:"tests/res/aaa/locallang_db.xml";s:4:"9d47";s:21:"tests/res/aaa/tca.php";s:4:"ddf9";s:33:"tests/res/aaa/doc/wizard_form.dat";s:4:"1855";s:34:"tests/res/aaa/doc/wizard_form.html";s:4:"a38d";s:23:"tests/res/bbb/ChangeLog";s:4:"1da2";s:24:"tests/res/bbb/README.txt";s:4:"ee2d";s:28:"tests/res/bbb/ext_emconf.php";s:4:"00bd";s:26:"tests/res/bbb/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/bbb/ext_tables.php";s:4:"84d0";s:28:"tests/res/bbb/ext_tables.sql";s:4:"717c";s:34:"tests/res/bbb/icon_tx_bbb_test.gif";s:4:"475a";s:30:"tests/res/bbb/locallang_db.xml";s:4:"7f20";s:21:"tests/res/bbb/tca.php";s:4:"f9d2";s:33:"tests/res/bbb/doc/wizard_form.dat";s:4:"12fb";s:34:"tests/res/bbb/doc/wizard_form.html";s:4:"37bf";s:23:"tests/res/ddd/ChangeLog";s:4:"661e";s:24:"tests/res/ddd/README.txt";s:4:"ee2d";s:28:"tests/res/ddd/ext_emconf.php";s:4:"e6a7";s:26:"tests/res/ddd/ext_icon.gif";s:4:"1bdc";s:28:"tests/res/ddd/ext_tables.php";s:4:"eed5";s:28:"tests/res/ddd/ext_tables.sql";s:4:"df94";s:34:"tests/res/ddd/icon_tx_ddd_test.gif";s:4:"475a";s:30:"tests/res/ddd/locallang_db.xml";s:4:"0b54";s:21:"tests/res/ddd/tca.php";s:4:"7e17";s:33:"tests/res/ddd/doc/wizard_form.dat";s:4:"4baa";s:34:"tests/res/ddd/doc/wizard_form.html";s:4:"7033";s:33:"mod1/class.tx_phpunit_module1.php";s:4:"d66a";s:38:"mod1/class.tx_phpunit_module1_ajax.php";s:4:"918d";s:45:"mod1/class.tx_phpunit_module1_mikkelricky.php";s:4:"87c5";s:13:"mod1/conf.php";s:4:"a873";s:14:"mod1/index.php";s:4:"da8f";s:18:"mod1/locallang.xml";s:4:"c9b4";s:22:"mod1/locallang_mod.php";s:4:"4d5c";s:19:"mod1/moduleicon.gif";s:4:"9d0b";s:19:"mod1/phpunit-be.css";s:4:"aadb";s:16:"mod1/phpunit.gif";s:4:"ea4a";s:15:"mod1/runner.gif";s:4:"9644";s:15:"mod1/styles.css";s:4:"6ad0";s:26:"mod1/tx_phpunit_module1.js";s:4:"7013";s:36:"PHPUnit-3.2.19/PHPUnit/Framework.php";s:4:"b119";s:46:"PHPUnit-3.2.19/PHPUnit/Samples/FailureTest.php";s:4:"9c61";s:60:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/BankAccount.php";s:4:"2534";s:66:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/BankAccountDBTest.php";s:4:"22e5";s:71:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/BankAccountDBTestMySQL.php";s:4:"fe35";s:83:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/_files/bank-account-after-deposits.xml";s:4:"c0c4";s:86:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/_files/bank-account-after-new-account.xml";s:4:"2f81";s:86:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/_files/bank-account-after-withdrawals.xml";s:4:"b8fd";s:73:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccountDB/_files/bank-account-seed.xml";s:4:"344f";s:58:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccount/BankAccount.php";s:4:"aefa";s:62:"PHPUnit-3.2.19/PHPUnit/Samples/BankAccount/BankAccountTest.php";s:4:"919a";s:47:"PHPUnit-3.2.19/PHPUnit/Samples/Money/IMoney.php";s:4:"bd5f";s:46:"PHPUnit-3.2.19/PHPUnit/Samples/Money/Money.php";s:4:"17c3";s:49:"PHPUnit-3.2.19/PHPUnit/Samples/Money/MoneyBag.php";s:4:"8f88";s:50:"PHPUnit-3.2.19/PHPUnit/Samples/Money/MoneyTest.php";s:4:"4732";s:48:"PHPUnit-3.2.19/PHPUnit/Runner/BaseTestRunner.php";s:4:"1a74";s:58:"PHPUnit-3.2.19/PHPUnit/Runner/IncludePathTestCollector.php";s:4:"5d3f";s:57:"PHPUnit-3.2.19/PHPUnit/Runner/StandardTestSuiteLoader.php";s:4:"8d5b";s:47:"PHPUnit-3.2.19/PHPUnit/Runner/TestCollector.php";s:4:"2841";s:49:"PHPUnit-3.2.19/PHPUnit/Runner/TestSuiteLoader.php";s:4:"c825";s:41:"PHPUnit-3.2.19/PHPUnit/Runner/Version.php";s:4:"957e";s:37:"PHPUnit-3.2.19/PHPUnit/Util/Class.php";s:4:"2a61";s:44:"PHPUnit-3.2.19/PHPUnit/Util/CodeCoverage.php";s:4:"7079";s:45:"PHPUnit-3.2.19/PHPUnit/Util/Configuration.php";s:4:"da11";s:44:"PHPUnit-3.2.19/PHPUnit/Util/ErrorHandler.php";s:4:"90d9";s:42:"PHPUnit-3.2.19/PHPUnit/Util/Fileloader.php";s:4:"29f6";s:42:"PHPUnit-3.2.19/PHPUnit/Util/Filesystem.php";s:4:"fd1e";s:38:"PHPUnit-3.2.19/PHPUnit/Util/Filter.php";s:4:"b5dd";s:46:"PHPUnit-3.2.19/PHPUnit/Util/FilterIterator.php";s:4:"b304";s:38:"PHPUnit-3.2.19/PHPUnit/Util/Getopt.php";s:4:"cd7b";s:39:"PHPUnit-3.2.19/PHPUnit/Util/Metrics.php";s:4:"bd56";s:35:"PHPUnit-3.2.19/PHPUnit/Util/PDO.php";s:4:"f91a";s:39:"PHPUnit-3.2.19/PHPUnit/Util/Printer.php";s:4:"6b75";s:38:"PHPUnit-3.2.19/PHPUnit/Util/Report.php";s:4:"e8ae";s:40:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton.php";s:4:"4348";s:40:"PHPUnit-3.2.19/PHPUnit/Util/Template.php";s:4:"9937";s:36:"PHPUnit-3.2.19/PHPUnit/Util/Test.php";s:4:"0d97";s:49:"PHPUnit-3.2.19/PHPUnit/Util/TestSuiteIterator.php";s:4:"4527";s:37:"PHPUnit-3.2.19/PHPUnit/Util/Timer.php";s:4:"b356";s:36:"PHPUnit-3.2.19/PHPUnit/Util/Type.php";s:4:"133c";s:35:"PHPUnit-3.2.19/PHPUnit/Util/XML.php";s:4:"9d6e";s:43:"PHPUnit-3.2.19/PHPUnit/Util/Report/Node.php";s:4:"0ef9";s:53:"PHPUnit-3.2.19/PHPUnit/Util/Report/Node/Directory.php";s:4:"7bfb";s:48:"PHPUnit-3.2.19/PHPUnit/Util/Report/Node/File.php";s:4:"428b";s:54:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/butter.png";s:4:"521e";s:57:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/chameleon.png";s:4:"24ab";s:57:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/close12_1.gif";s:4:"770d";s:60:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/container-min.js";s:4:"322d";s:57:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/container.css";s:4:"9f41";s:58:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/directory.html";s:4:"1f29";s:53:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/file.html";s:4:"75cd";s:60:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/file_no_yui.html";s:4:"0396";s:53:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/glass.png";s:4:"d0bc";s:53:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/item.html";s:4:"e9f0";s:60:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/method_item.html";s:4:"02b8";s:59:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/scarlet_red.png";s:4:"e7e9";s:52:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/snow.png";s:4:"3d0f";s:53:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/style.css";s:4:"8af7";s:62:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/yahoo-dom-event.js";s:4:"02f0";s:55:"PHPUnit-3.2.19/PHPUnit/Util/Report/Template/yui_item.js";s:4:"32c5";s:39:"PHPUnit-3.2.19/PHPUnit/Util/Log/CPD.php";s:4:"434c";s:44:"PHPUnit-3.2.19/PHPUnit/Util/Log/Database.php";s:4:"3291";s:44:"PHPUnit-3.2.19/PHPUnit/Util/Log/GraphViz.php";s:4:"b7be";s:40:"PHPUnit-3.2.19/PHPUnit/Util/Log/JSON.php";s:4:"bff0";s:43:"PHPUnit-3.2.19/PHPUnit/Util/Log/Metrics.php";s:4:"115d";s:40:"PHPUnit-3.2.19/PHPUnit/Util/Log/PEAR.php";s:4:"00e1";s:39:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD.php";s:4:"940a";s:39:"PHPUnit-3.2.19/PHPUnit/Util/Log/TAP.php";s:4:"7d58";s:39:"PHPUnit-3.2.19/PHPUnit/Util/Log/XML.php";s:4:"a83b";s:50:"PHPUnit-3.2.19/PHPUnit/Util/Log/Database/MySQL.sql";s:4:"094c";s:52:"PHPUnit-3.2.19/PHPUnit/Util/Log/Database/SQLite3.sql";s:4:"d9b0";s:44:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule.php";s:4:"5b08";s:50:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Class.php";s:4:"cd72";s:49:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/File.php";s:4:"3806";s:53:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function.php";s:4:"ed48";s:52:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Project.php";s:4:"7f1c";s:73:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Class/DepthOfInheritanceTree.php";s:4:"8c63";s:67:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Class/EfferentCoupling.php";s:4:"70fb";s:71:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Class/ExcessiveClassLength.php";s:4:"d20e";s:71:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Class/ExcessivePublicCount.php";s:4:"49dc";s:64:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Class/TooManyFields.php";s:4:"60b5";s:58:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function/CRAP.php";s:4:"2e49";s:66:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function/CodeCoverage.php";s:4:"7cb4";s:74:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function/CyclomaticComplexity.php";s:4:"e86d";s:75:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function/ExcessiveMethodLength.php";s:4:"1a3a";s:76:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function/ExcessiveParameterList.php";s:4:"30e0";s:69:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Function/NPathComplexity.php";s:4:"3882";s:57:"PHPUnit-3.2.19/PHPUnit/Util/Log/PMD/Rule/Project/CRAP.php";s:4:"2e71";s:57:"PHPUnit-3.2.19/PHPUnit/Util/Log/CodeCoverage/Database.php";s:4:"6c95";s:52:"PHPUnit-3.2.19/PHPUnit/Util/Log/CodeCoverage/XML.php";s:4:"d816";s:61:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/IncompleteTestMethod.tpl";s:4:"f965";s:50:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestClass.tpl";s:4:"8a33";s:51:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestMethod.tpl";s:4:"6141";s:55:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestMethodBool.tpl";s:4:"9a09";s:61:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestMethodBoolStatic.tpl";s:4:"9fa0";s:60:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestMethodException.tpl";s:4:"c08f";s:66:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestMethodExceptionStatic.tpl";s:4:"c021";s:57:"PHPUnit-3.2.19/PHPUnit/Util/Skeleton/TestMethodStatic.tpl";s:4:"4b31";s:45:"PHPUnit-3.2.19/PHPUnit/Util/Metrics/Class.php";s:4:"91ec";s:44:"PHPUnit-3.2.19/PHPUnit/Util/Metrics/File.php";s:4:"05d5";s:48:"PHPUnit-3.2.19/PHPUnit/Util/Metrics/Function.php";s:4:"1adb";s:47:"PHPUnit-3.2.19/PHPUnit/Util/Metrics/Project.php";s:4:"f3b9";s:54:"PHPUnit-3.2.19/PHPUnit/Util/TestDox/NamePrettifier.php";s:4:"eb4c";s:53:"PHPUnit-3.2.19/PHPUnit/Util/TestDox/ResultPrinter.php";s:4:"74d6";s:58:"PHPUnit-3.2.19/PHPUnit/Util/TestDox/ResultPrinter/HTML.php";s:4:"4ca2";s:58:"PHPUnit-3.2.19/PHPUnit/Util/TestDox/ResultPrinter/Text.php";s:4:"bcbb";s:43:"PHPUnit-3.2.19/PHPUnit/Framework/Assert.php";s:4:"e340";s:57:"PHPUnit-3.2.19/PHPUnit/Framework/AssertionFailedError.php";s:4:"1c84";s:54:"PHPUnit-3.2.19/PHPUnit/Framework/ComparisonFailure.php";s:4:"9381";s:47:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint.php";s:4:"2059";s:42:"PHPUnit-3.2.19/PHPUnit/Framework/Error.php";s:4:"14eb";s:63:"PHPUnit-3.2.19/PHPUnit/Framework/ExpectationFailedException.php";s:4:"72dc";s:51:"PHPUnit-3.2.19/PHPUnit/Framework/IncompleteTest.php";s:4:"5256";s:56:"PHPUnit-3.2.19/PHPUnit/Framework/IncompleteTestError.php";s:4:"b44a";s:43:"PHPUnit-3.2.19/PHPUnit/Framework/Notice.php";s:4:"9b99";s:51:"PHPUnit-3.2.19/PHPUnit/Framework/SelfDescribing.php";s:4:"4ca8";s:48:"PHPUnit-3.2.19/PHPUnit/Framework/SkippedTest.php";s:4:"e08d";s:53:"PHPUnit-3.2.19/PHPUnit/Framework/SkippedTestError.php";s:4:"a6aa";s:58:"PHPUnit-3.2.19/PHPUnit/Framework/SkippedTestSuiteError.php";s:4:"d836";s:41:"PHPUnit-3.2.19/PHPUnit/Framework/Test.php";s:4:"3283";s:45:"PHPUnit-3.2.19/PHPUnit/Framework/TestCase.php";s:4:"5f06";s:48:"PHPUnit-3.2.19/PHPUnit/Framework/TestFailure.php";s:4:"b065";s:49:"PHPUnit-3.2.19/PHPUnit/Framework/TestListener.php";s:4:"5e41";s:47:"PHPUnit-3.2.19/PHPUnit/Framework/TestResult.php";s:4:"c0a8";s:46:"PHPUnit-3.2.19/PHPUnit/Framework/TestSuite.php";s:4:"b16c";s:44:"PHPUnit-3.2.19/PHPUnit/Framework/Warning.php";s:4:"7755";s:60:"PHPUnit-3.2.19/PHPUnit/Framework/ComparisonFailure/Array.php";s:4:"892c";s:61:"PHPUnit-3.2.19/PHPUnit/Framework/ComparisonFailure/Object.php";s:4:"ad1a";s:61:"PHPUnit-3.2.19/PHPUnit/Framework/ComparisonFailure/Scalar.php";s:4:"6070";s:61:"PHPUnit-3.2.19/PHPUnit/Framework/ComparisonFailure/String.php";s:4:"9260";s:59:"PHPUnit-3.2.19/PHPUnit/Framework/ComparisonFailure/Type.php";s:4:"1682";s:58:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Invocation.php";s:4:"9a1e";s:64:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/InvocationMocker.php";s:4:"4ef2";s:57:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Invokable.php";s:4:"f622";s:55:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher.php";s:4:"a021";s:52:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Mock.php";s:4:"245c";s:58:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/MockObject.php";s:4:"de8f";s:52:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Stub.php";s:4:"eb94";s:58:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Verifiable.php";s:4:"3cbe";s:71:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/AnyInvokedCount.php";s:4:"0b53";s:69:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/AnyParameters.php";s:4:"2eba";s:66:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/Invocation.php";s:4:"e2e9";s:70:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/InvokedAtIndex.php";s:4:"bb54";s:74:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/InvokedAtLeastOnce.php";s:4:"a957";s:68:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/InvokedCount.php";s:4:"d88a";s:71:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/InvokedRecorder.php";s:4:"2354";s:66:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/MethodName.php";s:4:"9b07";s:66:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/Parameters.php";s:4:"01ca";s:75:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Matcher/StatelessInvocation.php";s:4:"72f6";s:64:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/Identity.php";s:4:"48c7";s:72:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/InvocationMocker.php";s:4:"2708";s:61:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/Match.php";s:4:"7592";s:71:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/MethodNameMatch.php";s:4:"5cdb";s:65:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/Namespace.php";s:4:"0b18";s:71:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/ParametersMatch.php";s:4:"7609";s:60:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Builder/Stub.php";s:4:"189a";s:69:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Stub/ConsecutiveCalls.php";s:4:"f85f";s:62:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Stub/Exception.php";s:4:"3151";s:70:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Stub/MatcherCollection.php";s:4:"8385";s:59:"PHPUnit-3.2.19/PHPUnit/Framework/MockObject/Stub/Return.php";s:4:"8371";s:51:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/And.php";s:4:"0a30";s:59:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/ArrayHasKey.php";s:4:"894e";s:57:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/Attribute.php";s:4:"1b70";s:65:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/ClassHasAttribute.php";s:4:"6b06";s:71:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/ClassHasStaticAttribute.php";s:4:"ff8d";s:58:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/FileExists.php";s:4:"2283";s:59:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/GreaterThan.php";s:4:"0665";s:58:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/IsAnything.php";s:4:"8ae6";s:55:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/IsEqual.php";s:4:"bf89";s:59:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/IsIdentical.php";s:4:"debd";s:60:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/IsInstanceOf.php";s:4:"b280";s:54:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/IsType.php";s:4:"36a9";s:56:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/LessThan.php";s:4:"00d2";s:51:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/Not.php";s:4:"1a6d";s:66:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/ObjectHasAttribute.php";s:4:"7c39";s:50:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/Or.php";s:4:"0554";s:57:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/PCREMatch.php";s:4:"b675";s:62:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/StringContains.php";s:4:"feb9";s:67:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/TraversableContains.php";s:4:"7ffd";s:71:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/TraversableContainsOnly.php";s:4:"c7c7";s:51:"PHPUnit-3.2.19/PHPUnit/Framework/Constraint/Xor.php";s:4:"5d03";s:55:"PHPUnit-3.2.19/PHPUnit/Extensions/ExceptionTestCase.php";s:4:"0fad";s:52:"PHPUnit-3.2.19/PHPUnit/Extensions/OutputTestCase.php";s:4:"5b86";s:57:"PHPUnit-3.2.19/PHPUnit/Extensions/PerformanceTestCase.php";s:4:"cf5a";s:50:"PHPUnit-3.2.19/PHPUnit/Extensions/PhptTestCase.php";s:4:"88bd";s:51:"PHPUnit-3.2.19/PHPUnit/Extensions/PhptTestSuite.php";s:4:"6ca4";s:50:"PHPUnit-3.2.19/PHPUnit/Extensions/RepeatedTest.php";s:4:"b645";s:54:"PHPUnit-3.2.19/PHPUnit/Extensions/SeleniumTestCase.php";s:4:"af08";s:51:"PHPUnit-3.2.19/PHPUnit/Extensions/TestDecorator.php";s:4:"81f1";s:47:"PHPUnit-3.2.19/PHPUnit/Extensions/TestSetup.php";s:4:"cbbe";s:61:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/AbstractTester.php";s:4:"b7b0";s:60:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DefaultTester.php";s:4:"e0b4";s:54:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/ITester.php";s:4:"5482";s:55:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/TestCase.php";s:4:"b7c4";s:66:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Composite.php";s:4:"a4a3";s:63:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Delete.php";s:4:"da9b";s:66:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/DeleteAll.php";s:4:"3b53";s:66:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Exception.php";s:4:"64d6";s:64:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Factory.php";s:4:"0361";s:75:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/IDatabaseOperation.php";s:4:"d9a4";s:63:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Insert.php";s:4:"459b";s:61:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Null.php";s:4:"6e89";s:64:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Replace.php";s:4:"b102";s:65:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/RowBased.php";s:4:"d0ef";s:65:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Truncate.php";s:4:"4489";s:63:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Operation/Update.php";s:4:"e772";s:70:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/AbstractDataSet.php";s:4:"3420";s:68:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/AbstractTable.php";s:4:"9dec";s:76:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/AbstractTableMetaData.php";s:4:"733f";s:73:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/AbstractXmlDataSet.php";s:4:"a1b5";s:68:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/DataSetFilter.php";s:4:"d4ec";s:69:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/DefaultDataSet.php";s:4:"7548";s:67:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/DefaultTable.php";s:4:"3058";s:75:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/DefaultTableIterator.php";s:4:"a0b3";s:75:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/DefaultTableMetaData.php";s:4:"1fe9";s:69:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/FlatXmlDataSet.php";s:4:"0674";s:63:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/IDataSet.php";s:4:"bc6f";s:61:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/ITable.php";s:4:"ecca";s:69:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/ITableIterator.php";s:4:"670f";s:69:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/ITableMetaData.php";s:4:"c28e";s:66:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/TableFilter.php";s:4:"9767";s:74:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/TableMetaDataFilter.php";s:4:"7309";s:65:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DataSet/XmlDataSet.php";s:4:"96e2";s:57:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/DataSet.php";s:4:"8038";s:75:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/DefaultDatabaseConnection.php";s:4:"2e6d";s:65:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/FilteredDataSet.php";s:4:"5577";s:69:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/IDatabaseConnection.php";s:4:"5c6c";s:59:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/IMetaData.php";s:4:"c9f6";s:58:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/MetaData.php";s:4:"98db";s:64:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/ResultSetTable.php";s:4:"d899";s:55:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/Table.php";s:4:"336a";s:63:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/TableIterator.php";s:4:"bca3";s:63:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/TableMetaData.php";s:4:"3793";s:76:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/MetaData/InformationSchema.php";s:4:"8a7b";s:64:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/MetaData/MySQL.php";s:4:"7b31";s:62:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/MetaData/Oci.php";s:4:"6f86";s:64:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/MetaData/PgSQL.php";s:4:"267b";s:65:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/DB/MetaData/Sqlite.php";s:4:"1748";s:72:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Constraint/DataSetIsEqual.php";s:4:"0c11";s:70:"PHPUnit-3.2.19/PHPUnit/Extensions/Database/Constraint/TableIsEqual.php";s:4:"f9aa";s:57:"PHPUnit-3.2.19/PHPUnit/Extensions/PhptTestCase/Logger.php";s:4:"20d0";s:61:"PHPUnit-3.2.19/PHPUnit/Extensions/SeleniumTestCase/append.php";s:4:"7f04";s:71:"PHPUnit-3.2.19/PHPUnit/Extensions/SeleniumTestCase/phpunit_coverage.php";s:4:"3d38";s:62:"PHPUnit-3.2.19/PHPUnit/Extensions/SeleniumTestCase/prepend.php";s:4:"fb42";s:41:"PHPUnit-3.2.19/PHPUnit/TextUI/Command.php";s:4:"62bd";s:47:"PHPUnit-3.2.19/PHPUnit/TextUI/ResultPrinter.php";s:4:"30a4";s:44:"PHPUnit-3.2.19/PHPUnit/TextUI/TestRunner.php";s:4:"b191";s:41:"PHPUnit-3.2.19/PHPUnit/Tests/AllTests.php";s:4:"71a7";s:55:"PHPUnit-3.2.19/PHPUnit/Tests/TestConfiguration.php.dist";s:4:"bfe1";s:48:"PHPUnit-3.2.19/PHPUnit/Tests/Runner/AllTests.php";s:4:"442e";s:58:"PHPUnit-3.2.19/PHPUnit/Tests/Runner/BaseTestRunnerTest.php";s:4:"0075";s:46:"PHPUnit-3.2.19/PHPUnit/Tests/Util/AllTests.php";s:4:"cc66";s:47:"PHPUnit-3.2.19/PHPUnit/Tests/Util/TimerTest.php";s:4:"6e26";s:54:"PHPUnit-3.2.19/PHPUnit/Tests/Util/TestDox/AllTests.php";s:4:"d194";s:64:"PHPUnit-3.2.19/PHPUnit/Tests/Util/TestDox/NamePrettifierTest.php";s:4:"6079";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/AllTests.php";s:4:"b6bc";s:53:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/AssertTest.php";s:4:"e86a";s:64:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/ComparisonFailureTest.php";s:4:"8a75";s:57:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/ConstraintTest.php";s:4:"8d4b";s:57:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/MockObjectTest.php";s:4:"597e";s:52:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/SuiteTest.php";s:4:"7e2e";s:55:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/TestCaseTest.php";s:4:"913b";s:62:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/TestImplementorTest.php";s:4:"70f5";s:59:"PHPUnit-3.2.19/PHPUnit/Tests/Framework/TestListenerTest.php";s:4:"6e50";s:52:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/AllTests.php";s:4:"f2f7";s:62:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/OutputTestCaseTest.php";s:4:"7d75";s:67:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/PerformanceTestCaseTest.php";s:4:"8b58";s:60:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/RepeatedTestTest.php";s:4:"8719";s:64:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/SeleniumTestCaseTest.php";s:4:"ad9b";s:61:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/AllTests.php";s:4:"b726";s:71:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/Operation/AllTests.php";s:4:"e1bf";s:77:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/Operation/OperationsTest.php";s:4:"6a2b";s:75:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/Operation/RowBasedTest.php";s:4:"9f78";s:69:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/DataSet/AllTests.php";s:4:"fc69";s:71:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/DataSet/FilterTest.php";s:4:"309a";s:76:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/DataSet/XmlDataSetsTest.php";s:4:"563c";s:94:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/DeleteAllOperationTest.xml";s:4:"fb1c";s:93:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/DeleteOperationResult.xml";s:4:"d076";s:91:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/DeleteOperationTest.xml";s:4:"e1a9";s:94:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/FilteredTestComparison.xml";s:4:"1f27";s:91:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/FilteredTestFixture.xml";s:4:"184a";s:86:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/FlatXmlDataSet.xml";s:4:"2b8f";s:93:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/InsertOperationResult.xml";s:4:"8156";s:91:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/InsertOperationTest.xml";s:4:"89c5";s:93:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/OperationsTestFixture.xml";s:4:"1f27";s:94:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/ReplaceOperationResult.xml";s:4:"845c";s:92:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/ReplaceOperationTest.xml";s:4:"68cb";s:87:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/RowBasedExecute.xml";s:4:"1b80";s:93:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/UpdateOperationResult.xml";s:4:"4917";s:91:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/UpdateOperationTest.xml";s:4:"134a";s:82:"PHPUnit-3.2.19/PHPUnit/Tests/Extensions/Database/_files/XmlDataSets/XmlDataSet.xml";s:4:"c2d2";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/AnInterface.php";s:4:"61f5";s:52:"PHPUnit-3.2.19/PHPUnit/Tests/_files/BankAccount.json";s:4:"5d0b";s:55:"PHPUnit-3.2.19/PHPUnit/Tests/_files/BankAccount.metrics";s:4:"68b3";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/BankAccount.pmd";s:4:"68b3";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/BankAccount.tap";s:4:"0c52";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/BankAccount.xml";s:4:"4bbc";s:68:"PHPUnit-3.2.19/PHPUnit/Tests/_files/ClassWithNonPublicAttributes.php";s:4:"d48d";s:54:"PHPUnit-3.2.19/PHPUnit/Tests/_files/DoubleTestCase.php";s:4:"f8e6";s:45:"PHPUnit-3.2.19/PHPUnit/Tests/_files/Error.php";s:4:"978f";s:47:"PHPUnit-3.2.19/PHPUnit/Tests/_files/Failure.php";s:4:"9c14";s:57:"PHPUnit-3.2.19/PHPUnit/Tests/_files/InheritedTestCase.php";s:4:"a2dc";s:50:"PHPUnit-3.2.19/PHPUnit/Tests/_files/MockRunner.php";s:4:"fef4";s:57:"PHPUnit-3.2.19/PHPUnit/Tests/_files/NoArgTestCaseTest.php";s:4:"f695";s:55:"PHPUnit-3.2.19/PHPUnit/Tests/_files/NoTestCaseClass.php";s:4:"08df";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/NoTestCases.php";s:4:"8ba5";s:49:"PHPUnit-3.2.19/PHPUnit/Tests/_files/NonStatic.php";s:4:"b986";s:57:"PHPUnit-3.2.19/PHPUnit/Tests/_files/NotPublicTestCase.php";s:4:"35e0";s:55:"PHPUnit-3.2.19/PHPUnit/Tests/_files/NotVoidTestCase.php";s:4:"1f5f";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/OneTestCase.php";s:4:"6888";s:54:"PHPUnit-3.2.19/PHPUnit/Tests/_files/OutputTestCase.php";s:4:"f0be";s:56:"PHPUnit-3.2.19/PHPUnit/Tests/_files/OverrideTestCase.php";s:4:"d1f8";s:51:"PHPUnit-3.2.19/PHPUnit/Tests/_files/SampleClass.php";s:4:"78d6";s:52:"PHPUnit-3.2.19/PHPUnit/Tests/_files/SetupFailure.php";s:4:"fbea";s:45:"PHPUnit-3.2.19/PHPUnit/Tests/_files/Sleep.php";s:4:"2a00";s:46:"PHPUnit-3.2.19/PHPUnit/Tests/_files/Struct.php";s:4:"b12f";s:47:"PHPUnit-3.2.19/PHPUnit/Tests/_files/Success.php";s:4:"493f";s:55:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TearDownFailure.php";s:4:"152d";s:52:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TestIterator.php";s:4:"52ed";s:62:"PHPUnit-3.2.19/PHPUnit/Tests/_files/ThrowExceptionTestCase.php";s:4:"210b";s:64:"PHPUnit-3.2.19/PHPUnit/Tests/_files/ThrowNoExceptionTestCase.php";s:4:"1de0";s:48:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TornDown.php";s:4:"c9ff";s:49:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TornDown2.php";s:4:"a270";s:49:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TornDown3.php";s:4:"0533";s:49:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TornDown4.php";s:4:"740a";s:49:"PHPUnit-3.2.19/PHPUnit/Tests/_files/TornDown5.php";s:4:"81d8";s:46:"PHPUnit-3.2.19/PHPUnit/Tests/_files/WasRun.php";s:4:"23a7";s:43:"PHPUnit-3.2.19/PHPUnit/Tests/_files/bar.xml";s:4:"1581";s:43:"PHPUnit-3.2.19/PHPUnit/Tests/_files/foo.xml";s:4:"6dc4";s:25:"lib/JsonPrettyPrinter.php";s:4:"22fd";}',
	'suggests' => array(
	),
);

?>