<?php
$module_name = 'HAT_EventType';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'basic_type',
            'studio' => 'visible',
            'label' => 'LBL_BASIC_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'require_approval_workflow',
            'studio' => 'visible',
            'label' => 'LBL_REQUIRE_APPROVAL_WORKFLOW',
          ),
          1 => 
          array (
            'name' => 'require_confirmation',
            'studio' => 'visible',
            'label' => 'LBL_REQUIRE_CONFIRMATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'event_short_desc',
            'label' => 'LBL_EVENT_SHORT_DESC',
          ),
          1 => 'description',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'change_target_status',
            'label' => 'LBL_CHANGE_TARGET_STATUS',
          ),
          1 => 
          array (
            'name' => 'target_asset_status',
            'studio' => 'visible',
            'label' => 'LBL_TARGET_ASSET_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'change_processing_status',
            'label' => 'LBL_CHANGE_PROCESSING_STATUS',
          ),
          1 => 
          array (
            'name' => 'processing_asset_status',
            'studio' => 'visible',
            'label' => 'LBL_PROCESSING_ASSET_STATUS',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'change_owning_org',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_OWNING_ORG',
          ),
          1 => 
          array (
            'name' => 'change_owning_person',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_OWNING_PERSON',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'change_oranization_le',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_ORANIZATION_LE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'change_using_org',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_USING_ORG',
          ),
          1 => 
          array (
            'name' => 'change_using_person',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_USING_PERSON',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'change_location',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_LOCATION',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'change_parent',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_PARENT',
          ),
          1 => 
          array (
            'name' => 'change_rack_position',
            'studio' => 'visible',
            'label' => 'LBL_CHANGE_RACK_POSITION',
          ),
        ),
      ),
    ),
  ),
);
?>
