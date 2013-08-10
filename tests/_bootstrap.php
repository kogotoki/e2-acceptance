<?php
use Bararai\Tests\Acceptance\Bootstrap\SettingsHelper;
use Bararai\Tests\Acceptance\Object\Admin;

$projectRoot = realpath(__DIR__ . '/..');
echo $projectRoot, "\n";
$settingsHelper = new SettingsHelper($projectRoot);
$settingsHelper->setPassword(Admin::$password);
$settingsHelper->setDbFromConfig();
$settingsHelper->setInstalled();

echo file_get_contents($projectRoot.'/vendor/e2/e2/user/instance.psa');
echo file_get_contents($projectRoot.'/vendor/e2/e2/user/settings.psa');
echo file_get_contents($projectRoot.'/vendor/e2/e2/user/password-hash.psa');
echo file_get_contents('http://localhost:4545/');

unset($settingsHelper);