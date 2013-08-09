<?php
use Bararai\Tests\Acceptance\Bootstrap\SettingsHelper;
use Bararai\Tests\Acceptance\Object\Admin;

$settingsHelper = new SettingsHelper(realpath(__DIR__ . '/../'));
$settingsHelper->setPassword(Admin::$password);
$settingsHelper->setDbFromConfig();
$settingsHelper->setInstalled();

unset($settingsHelper);