<?php

namespace Bararai\Tests\Acceptance\Bootstrap;

class SettingsHelper
{
    private $defaultE2Settings = array(
        'db' => array(
            'server' => 'localhost',
            'user_name' => 'e2_acceptance',
            'passw' => 'changeme',
            'name' => 'e2_acceptance',
            'table_prefix' => 'e2_',
            'exists' => false,
        ),
        'timezone' => array('offset' => 0, 'is_dst' => false,),
        'appearance' =>
        array (
            'notes_per_page' => 10,
            'favourites_frontpage' => false,
            'hot_frontpage' => false,
        ),
        'comments' => array('on' => true,),
        'max-image-width' => '768',
        'language' => 'en',
        'user' => array( 'email' => '',),
        'notifications' => array( 'new_comments' => false,),
        'template' => '',
    );
    private $projectRoot;

    public function __construct($projectRoot)
    {
        $this->projectRoot = $projectRoot;
    }

    /**
     * @param $password
     * @return string
     */
    public function setPassword($password)
    {
        $hash = $this->calculateHash($password);
        $this->putFileToUserDir('password-hash.psa', $hash);
    }

    public function setDbFromConfig()
    {
        $config = \Codeception\Configuration::config();
        $dbConfig = $config['modules']['config']['Db'];
        $this->setDbFromDsn($dbConfig['dsn'], $dbConfig['user'], $dbConfig['password']);
    }

    public function setDbFromDsn($dsn, $user, $password)
    {
        $this->checkProtocolIsMysql($dsn);
        $args = $this->parseDsn($dsn);
        $dbName = $args['dbname'];
        if (!empty($args['host'])) {
            $host = $args['host'];
        } else {
            $host = '127.0.0.1';
        }
        if (!empty($args['port'])) {
            $host .= ':'.$args['port'];
        }
        $this->setDb($host, $user, $password, $dbName);
    }

    public function setDb($host, $user, $password, $dbName)
    {
        $settings = array(
            'db' => array(
                'server' => $host,
                'user_name' => $user,
                'passw' => $password,
                'name' => $dbName,
            )
        );
        $this->setSettings($settings);
    }

    public function setSettings(array $settings)
    {
        $newSettings = array_replace_recursive($this->defaultE2Settings, $settings);
        $this->putFileToUserDir('settings.psa', $newSettings);
    }

    /**
     * @param $password
     * @return string
     */
    private function calculateHash($password)
    {
        if (function_exists('sha1')) {
            return sha1($password);
        } else {
            return substr(md5($password) . md5(' ' . $password), 0, 40);
        }
    }

    private function checkProtocolIsMysql($dsn)
    {
        if (substr($dsn, 0, 6) !== 'mysql:') {
            throw new \InvalidArgumentException('Change db settings — e2 supports only mysql');
        }
    }

    private function parseDsn($dsn)
    {
        $argString = substr($dsn, 7);
        $argString = str_replace(';', '&', $argString);
        parse_str($argString, $args);
        return $args;
    }

    public function setInstalled()
    {
        $this->putFileToUserDir('instance.psa', array('version' => 2741));
    }

    private function putFileToUserDir($file, $data)
    {
        $filename = sprintf('%s/vendor/e2/e2/user/%s', $this->projectRoot, $file);
        file_put_contents($filename, serialize($data));
    }
}