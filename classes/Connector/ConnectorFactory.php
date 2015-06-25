<?php
require_once(__DIR__ . DIRECTORY_SEPARATOR .'..'. DIRECTORY_SEPARATOR .'Settings.php');
require_once('MySQLDBConnector.php');

abstract class WSAL_Connector_ConnectorFactory
{
    public static $connector;
    public static $defaultConnector;
    public static $adapter;

    /**
     * Returns the a default WPDB connector for saving options
     */
    public static function GetDefaultConnector()
    {
         return new WSAL_Connector_MySQLDB();
    }

    /**
     * Returns a connector singleton
     * @return WSAL_Connector_ConnectorInterface
     */
    public static function GetConnector()
    {
        $connectionConfig = self::GetConfig();
        //TO DO: Load connection config

        if (self::$connector == null) {
            switch (strtolower($connectionConfig['type'])) {
                //TO DO: Add other connectors
                case 'mysql':
                default:
                    //use config
                    self::$connector = new WSAL_Connector_MySQLDB($connectionConfig);
            }
        }
        return self::$connector;
    }

    public static function GetConfig()
    {
        $conf = new WSAL_Settings(new WpSecurityAuditLog());

        return array(
            'type' => $conf->GetAdapterConfig('adapter-type'),
            'user' => $conf->GetAdapterConfig('adapter-user'),
            'password' => $conf->GetAdapterConfig('adapter-password'),
            'name' => $conf->GetAdapterConfig('adapter-name'),
            'hostname' => $conf->GetAdapterConfig('adapter-hostname'),
            'base_prefix' => $conf->GetAdapterConfig('adapter-base-prefix')
        );
    }
}
