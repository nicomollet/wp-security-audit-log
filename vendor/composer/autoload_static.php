<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite2764569fb0dddb672f4325f47684b81
{
    public static $files = array (
        '2007ccaa29a9efd0493ee82176c977d1' => __DIR__ . '/..' . '/wpwhitesecurity/import-export-plugin-settings/SettingsImportExport.php',
        'ed8f7d07f343dc9e7c5d31cc6cd4019b' => __DIR__ . '/..' . '/wpwhitesecurity/select2-wpwhitesecurity/load.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WSAL\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WSAL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'RCliTextFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'RFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'RHtmlFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'RTextFormatter' => __DIR__ . '/../..' . '/classes/Ref.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_ActiveRecord' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/ActiveRecordAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_Meta' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/MetaAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_Occurrence' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/OccurrenceAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_Query' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/QueryAdapter.php',
        'WSAL\\Adapter\\WSAL_Adapters_MySQL_TmpUser' => __DIR__ . '/../..' . '/classes/Adapters/MySQL/TmpUserAdapter.php',
        'WSAL\\Entities\\Abstract_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-abstract-entity.php',
        'WSAL\\Entities\\Metadata_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-metadata-entity.php',
        'WSAL\\Entities\\Occurrences_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-occurrences-entity.php',
        'WSAL\\Entities\\Options_Entity' => __DIR__ . '/../..' . '/classes/Entities/class-options-entity.php',
        'WSAL\\Helpers\\Classes_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-classes-helper.php',
        'WSAL\\Helpers\\Options' => __DIR__ . '/../..' . '/classes/Helpers/Options.php',
        'WSAL\\Helpers\\PHP_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-php-helper.php',
        'WSAL\\Helpers\\Validator' => __DIR__ . '/../..' . '/classes/Helpers/class-validator.php',
        'WSAL\\Helpers\\WP_Helper' => __DIR__ . '/../..' . '/classes/Helpers/class-wp-helper.php',
        'WSAL\\Loggers\\WSAL_Loggers_Database' => __DIR__ . '/../..' . '/classes/Loggers/Database.php',
        'WSAL\\Migration\\Metadata_Migration_440' => __DIR__ . '/../..' . '/classes/Migration/class-metadata-migration-440.php',
        'WSAL\\Multisite\\NetworkWide\\AbstractTracker' => __DIR__ . '/../..' . '/classes/Multisite/NetworkWide/AbstractTracker.php',
        'WSAL\\Multisite\\NetworkWide\\CPTsTracker' => __DIR__ . '/../..' . '/classes/Multisite/NetworkWide/CPTsTracker.php',
        'WSAL\\Multisite\\NetworkWide\\TrackerInterface' => __DIR__ . '/../..' . '/classes/Multisite/NetworkWide/TrackerInterface.php',
        'WSAL\\Utils\\Abstract_Migration' => __DIR__ . '/../..' . '/classes/Migration/class-abstract-migration.php',
        'WSAL\\Utils\\Migration' => __DIR__ . '/../..' . '/classes/Migration/class-migration.php',
        'WSAL_AbstractExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/AbstractExtension.php',
        'WSAL_AbstractLogger' => __DIR__ . '/../..' . '/classes/AbstractLogger.php',
        'WSAL_AbstractMetaDataSensor' => __DIR__ . '/../..' . '/classes/AbstractMetaDataSensor.php',
        'WSAL_AbstractSandboxTask' => __DIR__ . '/../..' . '/classes/AbstractSandboxTask.php',
        'WSAL_AbstractSensor' => __DIR__ . '/../..' . '/classes/AbstractSensor.php',
        'WSAL_AbstractView' => __DIR__ . '/../..' . '/classes/AbstractView.php',
        'WSAL_Adapters_ActiveRecordInterface' => __DIR__ . '/../..' . '/classes/Adapters/ActiveRecordInterface.php',
        'WSAL_Adapters_MetaInterface' => __DIR__ . '/../..' . '/classes/Adapters/MetaInterface.php',
        'WSAL_Adapters_OccurrenceInterface' => __DIR__ . '/../..' . '/classes/Adapters/OccurrenceInterface.php',
        'WSAL_Adapters_QueryInterface' => __DIR__ . '/../..' . '/classes/Adapters/QueryInterface.php',
        'WSAL_Alert' => __DIR__ . '/../..' . '/classes/Alert.php',
        'WSAL_AlertFormatter' => __DIR__ . '/../..' . '/classes/AlertFormatter.php',
        'WSAL_AlertFormatterConfiguration' => __DIR__ . '/../..' . '/classes/AlertFormatterConfiguration.php',
        'WSAL_AlertFormatterFactory' => __DIR__ . '/../..' . '/classes/AlertFormatterFactory.php',
        'WSAL_AlertManager' => __DIR__ . '/../..' . '/classes/AlertManager.php',
        'WSAL_AuditLogGridView' => __DIR__ . '/../..' . '/classes/AuditLogGridView.php',
        'WSAL_AuditLogListView' => __DIR__ . '/../..' . '/classes/AuditLogListView.php',
        'WSAL_BBPressExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/BBPressExtension.php',
        'WSAL_Connector_AbstractConnector' => __DIR__ . '/../..' . '/classes/Connector/AbstractConnector.php',
        'WSAL_Connector_ConnectorFactory' => __DIR__ . '/../..' . '/classes/Connector/ConnectorFactory.php',
        'WSAL_Connector_ConnectorInterface' => __DIR__ . '/../..' . '/classes/Connector/ConnectorInterface.php',
        'WSAL_Connector_MySQLDB' => __DIR__ . '/../..' . '/classes/Connector/MySQLDB.php',
        'WSAL_ConstantManager' => __DIR__ . '/../..' . '/classes/ConstantManager.php',
        'WSAL_ExtensionPlaceholderView' => __DIR__ . '/../..' . '/classes/ExtensionPlaceholderView.php',
        'WSAL_GravityFormsExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/GravityFormsExtension.php',
        'WSAL_Helpers_DataHelper' => __DIR__ . '/../..' . '/classes/Helpers/DataHelper.php',
        'WSAL_MainWpApi' => __DIR__ . '/../..' . '/classes/MainWpApi.php',
        'WSAL_Models_ActiveRecord' => __DIR__ . '/../..' . '/classes/Models/ActiveRecord.php',
        'WSAL_Models_Meta' => __DIR__ . '/../..' . '/classes/Models/Meta.php',
        'WSAL_Models_Occurrence' => __DIR__ . '/../..' . '/classes/Models/Occurrence.php',
        'WSAL_Models_OccurrenceQuery' => __DIR__ . '/../..' . '/classes/Models/OccurrenceQuery.php',
        'WSAL_Models_Query' => __DIR__ . '/../..' . '/classes/Models/Query.php',
        'WSAL_Models_TmpUser' => __DIR__ . '/../..' . '/classes/Models/TmpUser.php',
        'WSAL_Nicer' => __DIR__ . '/../..' . '/classes/Nicer.php',
        'WSAL_PluginInstallAndActivate' => __DIR__ . '/../..' . '/classes/Utilities/PluginInstallAndActivate.php',
        'WSAL_PluginInstallerAction' => __DIR__ . '/../..' . '/classes/Utilities/PluginInstallerAction.php',
        'WSAL_Ref' => __DIR__ . '/../..' . '/classes/Ref.php',
        'WSAL_ReportArgs' => __DIR__ . '/../..' . '/classes/ReportArgs.php',
        'WSAL_SensorManager' => __DIR__ . '/../..' . '/classes/SensorManager.php',
        'WSAL_Sensors_ACFMeta' => __DIR__ . '/../..' . '/classes/Sensors/ACFMeta.php',
        'WSAL_Sensors_Comments' => __DIR__ . '/../..' . '/classes/Sensors/Comments.php',
        'WSAL_Sensors_Content' => __DIR__ . '/../..' . '/classes/Sensors/Content.php',
        'WSAL_Sensors_Database' => __DIR__ . '/../..' . '/classes/Sensors/Database.php',
        'WSAL_Sensors_Files' => __DIR__ . '/../..' . '/classes/Sensors/Files.php',
        'WSAL_Sensors_LogInOut' => __DIR__ . '/../..' . '/classes/Sensors/LogInOut.php',
        'WSAL_Sensors_MainWP' => __DIR__ . '/../..' . '/classes/Sensors/MainWP.php',
        'WSAL_Sensors_Menus' => __DIR__ . '/../..' . '/classes/Sensors/Menus.php',
        'WSAL_Sensors_MetaData' => __DIR__ . '/../..' . '/classes/Sensors/MetaData.php',
        'WSAL_Sensors_Multisite' => __DIR__ . '/../..' . '/classes/Sensors/Multisite.php',
        'WSAL_Sensors_MultisiteSignUp' => __DIR__ . '/../..' . '/classes/Sensors/MultisiteSignUp.php',
        'WSAL_Sensors_PluginsThemes' => __DIR__ . '/../..' . '/classes/Sensors/PluginsThemes.php',
        'WSAL_Sensors_Register' => __DIR__ . '/../..' . '/classes/Sensors/Register.php',
        'WSAL_Sensors_System' => __DIR__ . '/../..' . '/classes/Sensors/System.php',
        'WSAL_Sensors_UserProfile' => __DIR__ . '/../..' . '/classes/Sensors/UserProfile.php',
        'WSAL_Sensors_Widgets' => __DIR__ . '/../..' . '/classes/Sensors/Widgets.php',
        'WSAL_Settings' => __DIR__ . '/../..' . '/classes/Settings.php',
        'WSAL_TablePressExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/TablePressExtension.php',
        'WSAL_Uninstall' => __DIR__ . '/../..' . '/classes/Uninstall.php',
        'WSAL_Utilities_DateTimeFormatter' => __DIR__ . '/../..' . '/classes/Utilities/DateTimeFormatter.php',
        'WSAL_Utilities_Emailer' => __DIR__ . '/../..' . '/classes/Utilities/Emailer.php',
        'WSAL_Utilities_FileSystemUtils' => __DIR__ . '/../..' . '/classes/Utilities/FileSystemUtils.php',
        'WSAL_Utilities_RequestUtils' => __DIR__ . '/../..' . '/classes/Utilities/RequestUtils.php',
        'WSAL_Utilities_UsersUtils' => __DIR__ . '/../..' . '/classes/Utilities/UserUtils.php',
        'WSAL_ViewManager' => __DIR__ . '/../..' . '/classes/ViewManager.php',
        'WSAL_Views_AuditLog' => __DIR__ . '/../..' . '/classes/Views/AuditLog.php',
        'WSAL_Views_EmailNotifications' => __DIR__ . '/../..' . '/classes/Views/EmailNotifications.php',
        'WSAL_Views_ExternalDB' => __DIR__ . '/../..' . '/classes/Views/ExternalDB.php',
        'WSAL_Views_Help' => __DIR__ . '/../..' . '/classes/Views/Help.php',
        'WSAL_Views_LogInUsers' => __DIR__ . '/../..' . '/classes/Views/LogInUsers.php',
        'WSAL_Views_Reports' => __DIR__ . '/../..' . '/classes/Views/Reports.php',
        'WSAL_Views_Search' => __DIR__ . '/../..' . '/classes/Views/Search.php',
        'WSAL_Views_Settings' => __DIR__ . '/../..' . '/classes/Views/Settings.php',
        'WSAL_Views_SetupWizard' => __DIR__ . '/../..' . '/classes/Views/SetupWizard.php',
        'WSAL_Views_ToggleAlerts' => __DIR__ . '/../..' . '/classes/Views/ToggleAlerts.php',
        'WSAL_WFCMExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/WFCMExtension.php',
        'WSAL_WPFormsExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/WPFormsExtension.php',
        'WSAL_WidgetManager' => __DIR__ . '/../..' . '/classes/WidgetManager.php',
        'WSAL_WooCommerceExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/WooCommerceExtension.php',
        'WSAL_YoastSeoExtension' => __DIR__ . '/../..' . '/classes/ThirdPartyExtensions/YoastSeoExtension.php',
        'wpdbCustom' => __DIR__ . '/../..' . '/classes/Connector/wp-db-custom.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite2764569fb0dddb672f4325f47684b81::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite2764569fb0dddb672f4325f47684b81::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite2764569fb0dddb672f4325f47684b81::$classMap;

        }, null, ClassLoader::class);
    }
}
