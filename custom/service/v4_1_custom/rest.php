<?php
    chdir('../../..');
    require_once('ProcessAssetWSCustom.php');
    $webservice_path = 'service/core/SugarRestService.php';
    $webservice_class = 'SugarRestService';
    $webservice_impl_class = 'ProcessAssetWSCustom';
    $registry_path = 'custom/service/v4_1_custom/registry.php';
    $registry_class = 'registry_v4_1_custom';
    $location = 'custom/service/v4_1_custom/rest.php';
    require_once('service/core/webservice.php');
?>