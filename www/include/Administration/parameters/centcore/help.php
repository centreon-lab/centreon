<?php
$help = array();

/**
 * Centcore Settings
 */
$help['tip_enable_perfdata_sync'] = dgettext(
    'help',
    'Enable Perfdata synchronisation between poller and Central Server operated by Centcore'
);
$help['tip_enable_logs_sync'] = dgettext(
    'help',
    'Enable Monitoring Engine Logs synchronisation between poller and Central Server operated by Centcore'
);
$help['tip_centcore_cmd_timeout'] = dgettext(
    'help',
    "Timeout value in seconds. Used for freeing Centcore when it's stuck"
    . " because of blocking pipe files or SSH connections."
);
$help['tip_enable_broker_stats'] = dgettext(
    'help',
    "Enable Centreon Broker statistics collection into the central server in order to reduce"
    . " the network load generated by Centcore. Be carefull: broker statistics will not be"
    . " available into Home > Broker statistics."
);
