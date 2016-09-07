<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

$dictionary['HAT_Asset_Trans_Batch'] = array(
	'table'=>'hat_asset_trans_batch',
	'audited'=>true,
	'inline_edit'=>true,
	'duplicate_merge'=>true,
	'fields'=>array (
		'name' => 
		array (
			'name' => 'name',
			'vname' => 'LBL_NAME',
			'type' => 'name',
			'link' => true,
			'dbType' => 'varchar',
			'len' => '255',
			'unified_search' => true,
			'full_text_search' => 
			array (
				'boost' => 3,
				),
			'required' => true,
			'importable' => 'required',
			'duplicate_merge' => 'disabled',
			'merge_filter' => 'disabled',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'size' => '20',
			),
		'tracking_number' =>  array (
			'name' => 'tracking_number',
			'vname' => 'LBL_TRACKING_NUMBER',
			'type' => 'varchar',
			'len' => '255',
			'unified_search' => true,
			'required' => false,
			'importable' => 'required',
			'duplicate_merge' => 'disabled',
			'merge_filter' => 'disabled',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'size' => '20',
			),
		'asset_trans_status' => 
		array (
			'required' => true,
			'name' => 'asset_trans_status',
			'vname' => 'LBL_ASSET_TRANS_STATUS',
			'type' => 'enum',
			'massupdate' => '1',
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => false,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => 100,
			'size' => '20',
			'options' => 'asset_trans_status',
			'studio' => 'visible',
			'dependency' => false,
			'default' => 'DRAFT',
			),
		'planned_complete_date' => 
		array (
			'required' => false,
			'name' => 'planned_complete_date',
			'vname' => 'LBL_PLANNED_COMPLETE_DATE',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			),
		'planned_execution_date' => 
		array (
			'required' => false,
			'name' => 'planned_execution_date',
			'vname' => 'LBL_PLANNED_EXECUTION_DATE',
			'type' => 'date',
			'massupdate' => 0,
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'size' => '20',
			'enable_range_search' => false,
			'dbType' => 'datetime',
			'display_default' => 'now',
			),
/*		'lov_cux_event_type_option_list' =>
		array (
								'source' => 'non-db', //从EventType映射
								'name' => 'lov_cux_event_type_option_list',
								'vname' => 'LBL_EVENT_TYPE_OPTION_LIST',
								'type' => 'enum',
								'default'=>'',
								'reportable' => true,
								'studio' => 'visible',
								'options' => 'cux_event_type_option_list',
								),
		'lov_asset_status_list' =>
		array (
								'source' => 'non-db', //从EventType映射
								'name' => 'lov_asset_status_list',
								'vname' => 'LBL_ASSET_STATUS_LIST',
								'type' => 'enum',
								'default'=>'',
								'reportable' => true,
								'studio' => 'visible',
								'options' => 'asset_status_list',
								),
		'target_asset_status' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'target_asset_status',
			  'vname' => 'LBL_TARGET_ASSET_STATUS',
			  'type' => 'varchar',// 'enum',
			  'default'=>'',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'asset_status_list',
			  ),
		'change_location' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_location',
			  'vname' => 'LBL_CHANGE_LOCATION',
			  'type' =>'varchar',// 'enum',
			  'default' => 'OPTIONAL',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'cux_event_type_option_list',
			  ),
		'processing_asset_status' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'processing_asset_status',
			  'vname' => 'LBL_PROCESSING_ASSET_STATUS',
			  'type' => 'varchar',//'enum',
			  'default'=>'',
			  'reportable' => true,
			  'studio' => 'visible',
			 // 'options' => 'asset_status_list',
			  ),
		'change_organization' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_organization',
			  'vname' => 'LBL_CHANGE_ORGANIZATION',
			  'type' => 'varchar',//'enum',
			  'default' => 'OPTIONAL',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'cux_event_type_option_list',
			  ),
		'change_contact' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_contact',
			  'vname' => 'LBL_CHANGE_CONTACT',
			  'type' =>'varchar',// 'enum',
			  'default' => 'OPTIONAL',
			  'reportable' => true,
			  'studio' => 'visible',
			 // 'options' => 'cux_event_type_option_list',
			  ),
		'change_oranization_le' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_oranization_le',
			  'vname' => 'LBL_CHANGE_ORANIZATION_LE',
			  'type' => 'varchar',//'enum',
			  'default' => 'OPTIONAL',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'cux_event_type_option_list',
			  ),
		'change_location_desc' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_location_desc',
			  'vname' => 'LBL_CHANGE_LOCATION_DESC',
			  'type' => 'varchar',////'enum',
			  'default' => 'OPTIONAL',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'cux_event_type_option_list',
			  ),
		'require_approval_workflow' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'require_approval_workflow',
			  'vname' => 'LBL_REQUIRE_APPROVAL_WORKFLOW',
			  'type' =>'varchar',// 'enum',
			  'default' => 'LOCKED',
			  'reportable' => true,
			  'studio' => 'visible',
			 // 'options' => 'cux_event_type_option_list',
			  ),		
		'require_confirmation' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'require_confirmation',
			  'vname' => 'LBL_REQUIRE_CONFIRMATION',
			  'type' =>'varchar',// 'enum',
			  'default' => 'LOCKED',
			  'reportable' => true,
			  'studio' => 'visible',
			 // 'options' => 'cux_event_type_option_list',
			  ),	
		'change_target_status' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_target_status',
			  'vname' => 'LBL_CHANGE_TARGET_STATUS',
			  'type' => 'varchar',// 'enum',
			  'default' => '0',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'dom_int_bool',
			  ),	
		'change_processing_status' => 
		array ( 
			  'source' => 'non-db', //从EventType映射
			  'name' => 'change_processing_status',
			  'vname' => 'LBL_CHANGE_PROCESSING_STATUS',
			  'type' =>'varchar',// 'enum',
			  'default' => '0',
			  'reportable' => true,
			  'studio' => 'visible',
			  //'options' => 'dom_int_bool',
			  ),		
*/
			  'haa_frameworks_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'haa_frameworks_id',
			  	'vname' => 'LBL_FRAMEWORKS_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'framework' => 
			  array (
			  	'required' => true,
			  	'source' => 'non-db',
			  	'name' => 'framework',
			  	'vname' => 'LBL_FRAMEWORKS',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'haa_frameworks_id',
			  	'ext2' => 'HAA_Frameworks',
			  	'module' => 'HAA_Frameworks',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'hat_eventtype_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'hat_eventtype_id',
			  	'vname' => 'LBL_HAT_EVENTTYPE_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'event_type' => 
			  array (
			  	'required' => true,
			  	'source' => 'non-db',
			  	'name' => 'event_type',
			  	'vname' => 'LBL_EVENT_TYPE',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'hat_eventtype_id',
			  	'ext2' => 'HAT_EventType',
			  	'module' => 'HAT_EventType',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'target_using_org_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'target_using_org_id',
			  	'vname' => 'LBL_TARGET_USING_ORG_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'target_using_org' => 
			  array (
			  	'required' => true,
			  	'source' => 'non-db',
			  	'name' => 'target_using_org',
			  	'vname' => 'LBL_TARGET_USING_ORG',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'target_using_org_id',
			  	'ext2' => 'Accounts',
			  	'module' => 'Accounts',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'current_owning_org_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'current_owning_org_id',
			  	'vname' => 'LBL_CURRENT_OWNING_ORG_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'current_owning_org' => 
			  array (
			  	'required' => true,
			  	'source' => 'non-db',
			  	'name' => 'current_owning_org',
			  	'vname' => 'LBL_CURRENT_OWNING_ORG',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'current_owning_org_id',
			  	'ext2' => 'Accounts',
			  	'module' => 'Accounts',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'target_owning_org_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'target_owning_org_id',
			  	'vname' => 'LBL_TARGET_OWNING_ORG_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'target_owning_org' => 
			  array (
			  	'required' => true,
			  	'source' => 'non-db',
			  	'name' => 'target_owning_org',
			  	'vname' => 'LBL_TARGET_OWNING_ORG',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'target_owning_org_id',
			  	'ext2' => 'Accounts',
			  	'module' => 'Accounts',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'source_wo_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'source_wo_id',
			  	'vname' => 'LBL_SOURCE_WO_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'source_wo' => 
			  array (
			  	'required' => false,
			  	'source' => 'non-db',
			  	'name' => 'source_wo',
			  	'vname' => 'LBL_SOURCE_WO',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'source_wo_id',
			  	'ext2' => 'HAM_WO',
			  	'module' => 'HAM_WO',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'source_woop_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'source_woop_id',
			  	'vname' => 'LBL_SOURCE_WOOP_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'source_woop' => 
			  array (
			  	'required' => false,
			  	'source' => 'non-db',
			  	'name' => 'source_woop',
			  	'vname' => 'LBL_SOURCE_WOOP',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'source_woop_id',
			  	'ext2' => 'HAM_WOOP',
			  	'module' => 'HAM_WOOP',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'owner_id' => 
			  array (
			  	'required' => false,
			  	'name' => 'owner_id',
			  	'vname' => 'LBL_OWNER_ID',
			  	'type' => 'id',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => false,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => 36,
			  	'size' => '20',
			  	),
			  'owner' => 
			  array (
			  	'required' => true,
			  	'source' => 'non-db',
			  	'name' => 'owner',
			  	'vname' => 'LBL_OWNER',
			  	'type' => 'relate',
			  	'massupdate' => 0,
			  	'no_default' => false,
			  	'comments' => '',
			  	'help' => '',
			  	'importable' => 'true',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => '0',
			  	'audited' => false,
			  	'inline_edit' => true,
			  	'reportable' => true,
			  	'unified_search' => false,
			  	'merge_filter' => 'disabled',
			  	'len' => '255',
			  	'size' => '20',
			  	'id_name' => 'owner_id',
			  	'ext2' => 'Contacts',
			  	'module' => 'Contacts',
			  	'rname' => 'name',
			  	'quicksearch' => 'enabled',
			  	'studio' => 'visible',
			  	),
			  'line_items' =>
			  array (
			  	'required' => false,
			  	'name' => 'line_items',
			  	'vname' => 'LBL_LINE_ITEMS',
			  	'type' => 'function',
			  	'source' => 'non-db',
			  	'massupdate' => 0,
			  	'importable' => 'false',
			  	'duplicate_merge' => 'disabled',
			  	'duplicate_merge_dom_value' => 0,
			  	'audited' => false,
			  	'reportable' => false,
			  	'function' =>
			  	array(
			  		'name' => 'display_lines',
			  		'returns' => 'html',
			  		'include' => 'modules/HAT_Asset_Trans_Batch/Render_Line_Items.php'
			  		),
			  	),
			  'hat_asset_trans_batch_hat_asset_trans' =>
			  array (
			  	'name' => 'hat_asset_trans_batch_hat_asset_trans',
			  	'type' => 'link',
			  	'relationship' => 'hat_asset_trans_batch_hat_asset_trans',
			  	'source' => 'non-db',
			  	'module' => 'HAT_Asset_Trans',
			  	'bean_name' => 'HAT_Asset_Trans',
			  	'side' => 'right',
			  	'vname' => 'LBL_HAT_ASSET_TRANS_BATCH_HAT_ASSET_TRANS_FROM_HAT_ASSET_TRANS_TITLE',
			  	),
			  ),
'relationships'=>array (

	),
'optimistic_locking'=>true,
'unified_search'=>true,
);
if (!class_exists('VardefManager')){
	require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('HAT_Asset_Trans_Batch','HAT_Asset_Trans_Batch', array('basic','assignable','security_groups'));