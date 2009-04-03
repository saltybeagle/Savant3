<?php
/**
 * Make package file for the UNL_UCBCN package.
 *
 * PHP version 5
 *
 * @category  Events
 * @package   UNL_UCBCN
 * @author    Brett Bieber <brett.bieber@gmail.com>
 * @copyright 2008 Regents of the University of Nebraska
 * @license   http://www1.unl.edu/wdn/wiki/Software_License BSD License
 * @link      http://pear.unl.edu/
 */

ini_set('display_errors', true);

/**
 * Require the PEAR_PackageFileManager2 classes, and other
 * necessary classes for package.xml file creation.
 */
require_once 'PEAR/PackageFileManager2.php';
require_once 'PEAR/PackageFileManager/File.php';
require_once 'PEAR/Task/Postinstallscript/rw.php';
require_once 'PEAR/Config.php';
require_once 'PEAR/Frontend.php';

/**
 * @var PEAR_PackageFileManager
 */
PEAR::setErrorHandling(PEAR_ERROR_DIE);
chdir(dirname(__FILE__));
$pfm = PEAR_PackageFileManager2::importOptions('package.xml', array(
//$pfm = new PEAR_PackageFileManager2();
//$pfm->setOptions(array(
    'packagedirectory' => dirname(__FILE__),
    'baseinstalldir' => '/',
    'filelistgenerator' => 'svn',
    'ignore' => array(  'package.xml',
                        '.project',
                        '.buildpath',
                        '*.tgz',
                        'makepackage.php',
                        '.cache'),
    'simpleoutput' => true,
    'roles'=>array('php'=>'php'),
    'exceptions'=>array()
));
$pfm->setPackage('Savant3');
$pfm->setPackageType('php'); // this is a PEAR-style php script package
$pfm->setSummary('A PHP5 template system that uses PHP for its logic; provides path searching, plugins, filters, and an optional compiler system.');
$pfm->setDescription('Savant3 is an object-oriented system to help keep manipulation
logic (\'model\' or \'controller\' scripts) separate from display
logic (\'view\' scripts) using PHP-based templates.  Savant3 is
E_STRICT compliant for PHP5, provides a plugin model for
convenience methods, supports output filter callbacks, allows
for custom compilers, and provides path searching for themed
(skinned) applications.');
$pfm->setChannel('phpsavant.com');
$pfm->setAPIStability('stable');
$pfm->setReleaseStability('stable');
$pfm->setAPIVersion('3.0.1');
$pfm->setReleaseVersion('3.0.1');
$pfm->setNotes('
* Modify __toString method signature for compatibility with PHP 5.3.
No parameters should be sent. If you need to send a template parameter, use fetch($tpl) or setTemplate($tpl) then echo $savant.

Thanks, Dan Bettles.

* Add protected method getOutput() which will return the output including error_text if an error occurs.
');

//$pfm->addMaintainer('lead','saltybeagle','Brett Bieber','brett.bieber@gmail.com');
$pfm->setLicense('LGPL License', '');
$pfm->clearDeps();
$pfm->setPhpDep('5.1.0');
$pfm->setPearinstallerDep('1.4.3');
$pfm->generateContents();
if (isset($_SERVER['argv']) && $_SERVER['argv'][1] == 'make') {
    $pfm->writePackageFile();
} else {
    $pfm->debugPackageFile();
}
?>