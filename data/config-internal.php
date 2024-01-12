<?php
return [
  'database' => [
    'host' => 'espo',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'michal',
    'password' => 'martin',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1705068306.235206,
  'passwordSalt' => '0d8bf07c0d5a876d',
  'cryptKey' => '9c4697020e36cdbf041486141b5e0b4f',
  'hashSecretKey' => 'a80ed4b89c0a953894530e68c19811bc',
  'defaultPermissions' => [
    'user' => 33,
    'group' => 33
  ],
  'actualDatabaseType' => 'mysql',
  'actualDatabaseVersion' => '8.0.35',
  'instanceId' => '20602ed3-a84d-4883-9d74-09f0767c3ffb'
];
