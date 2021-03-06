<?php
$module_name = 'HAA_QUAL';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/HAA_FF/ff_include.js',
        ),
        1 => 
        array (
          'file' => 'modules/HAA_QUAL/js/HAA_QUAL_editview.js',
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
          0 => 
          array (
            'name' => 'code_qualification_type',
            'studio' => 'visible',
            'label' => 'LBL_QUALIFICATION_TYPE',
            'displayParams' => 
            array (
              'initial_filter' => '&code_type_advanced=qualification_type',
              'field_to_name_array' => 
              array (
                'name' => 'code_qualification_type',
                'id' => 'code_qualification_type_id',
                'haa_ff_id' => 'haa_ff_id',
              ),
              'call_back_function' => 'setTypePopupReturn',
            ),
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'certified_to',
            'label' => 'LBL_CERTIFIED_TO',
          ),
          1 => 
          array (
            'name' => 'certified_by',
            'label' => 'LBL_CERTIFIED_BY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'effective_start_date',
            'label' => 'LBL_EFFECTIVE_START_DATE',
          ),
          1 => 
          array (
            'name' => 'qual_status',
            'studio' => 'visible',
            'label' => 'LBL_QUAL_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'no_effective_end_flag',
            'label' => 'LBL_NO_EFFECTIVE_END_FLAG',
          ),
          1 => 
          array (
            'name' => 'effective_end_date',
            'label' => 'LBL_EFFECTIVE_END_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'content',
            'label' => 'LBL_CONTENT',
          ),
          1 => 
          array (
            'name' => 'content_description',
            'label' => 'LBL_CONTENT_DESC',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'org',
            'studio' => 'visible',
            'label' => 'LBL_ORG',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'contact',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
            'displayParams' => 
            array (
              'initial_filter' => '&account_name_advanced="+encodeURIComponent(document.getElementById("org").value)+"',
            ),
          ),
          1 => 
          array (
            'name' => 'contact_id_number',
            'label' => 'LBL_CONTACT_ID_NUMBER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contact_fixed_phone',
            'label' => 'LBL_CONTACT_FIXED_PHONE',
          ),
          1 => 
          array (
            'name' => 'contact_mobile',
            'label' => 'LBL_CONTACT_MOBILE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'contact_mail',
            'label' => 'LBL_CONTACT_MAIL',
          ),
          1 => 
          array (
            'name' => 'contact_address',
            'label' => 'LBL_CONTACT_ADDRESS',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'attribute1',
            'label' => 'LBL_ATTRIBUTE1',
          ),
          1 => 
          array (
            'name' => 'attribute2',
            'label' => 'LBL_ATTRIBUTE2',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'attribute3',
            'label' => 'LBL_ATTRIBUTE3',
          ),
          1 => 
          array (
            'name' => 'attribute4',
            'label' => 'LBL_ATTRIBUTE4',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'attribute5',
            'label' => 'LBL_ATTRIBUTE5',
          ),
          1 => 
          array (
            'name' => 'attribute6',
            'label' => 'LBL_ATTRIBUTE6',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'attribute7',
            'label' => 'LBL_ATTRIBUTE7',
          ),
          1 => 
          array (
            'name' => 'attribute8',
            'label' => 'LBL_ATTRIBUTE8',
          ),
        ),
        4 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'attribute9',
            'label' => 'LBL_ATTRIBUTE9',
          ),
        ),
      ),
    ),
  ),
);
?>
