<?php

return array(
    'client_tabs' => array(
        'crowdstrike-tab' => array('view' => 'crowdstrike_client_tab', 'i18n' => 'crowdstrike.crowdstrike'),
    ),
    'listings' => array(
        'crowdstrike' => array('view' => 'crowdstrike_listing', 'i18n' => 'crowdstrike.crowdstrike'),
    ),
    'widgets' => array(
        'crowdstrike_sensor_versions' => array('view' => 'crowdstrike_sensor_versions_widget', 'i18n' => 'sensor-versions-widget'),
        'crowdstrike_sensor_versions_graph' => array('view' => 'crowdstrike_sensor_versions_graph_widget', 'i18n' => 'sensor-versions-widget'),
    ),
    'reports' => array(
        'crowdstrike' => array('view' => 'crowdstrike_report', 'i18n' => 'crowdstrike.report'),
    ),
);
