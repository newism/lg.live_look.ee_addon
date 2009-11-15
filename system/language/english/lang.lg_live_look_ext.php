<?php
/**
* English language file for LG Live Look
* 
* This file must be placed in the
* /system/language/english/ folder in your ExpressionEngine installation.
*
* @package LgLiveLook
* @version 1.2.0
* @author Leevi Graham <http://leevigraham.com>
* @see http://leevigraham.com/cms-customisation/expressionengine/addon/lg-live-look/
* @copyright Copyright (c) 2007-2009 Leevi Graham
* @license {@link http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution-Share Alike 3.0 Unported} All source code commenting and attribution must not be removed. This is a condition of the attribution clause of the license.
*/

$L = array(

'which_groups_label'	=> 'Which member groups will see the LG Live Look tab and links?',
'no_weblogs_msg' 		=> 'There are no weblogs assigned to this site.',

'lg_admin_title'			=> 'LG Admin Options',
'donation'					=> 'This extension was developed by <a href="http://leevigraham.com">Leevi Graham</a>. <br />Support its development by donating.',
'show_donate_label'			=> 'Show the donation link at the top of the settings page?',
'show_promos_label'			=> 'Show promos at the top of the settings page?',

"display_tab_label" 		=> "Display tab in the Publish Form",
"display_link_label" 		=> "Display link in the Edit Page",
"disable_preview_label"		=> "Disable standard EE preview in the Publish Form",
"live_look_path_label"  	=> "Preview URL",
"live_look"					=> "Live Look",

"save_entry_msg" => "A new revision must be created before this entry can be previewed. ",
"enlarge_iframe" => "Enlarge Preview",
"shrink_iframe" => "Shrink Preview",
"preview_of_published" => "Preview of currently published entry:",

'enable_extension_title'	=> 'Enable extension',
'enable_extension_label'	=> 'Enable {addon_name} for this site?',

'weblog_customisation_title' => 'Weblog customisation',
'weblog_customisation_info' => "<p>Each weblog has it's own unique settings to add a Live Look tab in the publish / edit form, add a Live Look link in the edit table and display the default Publish Form preview. The Live Look tab and link will use the entry preview url.</p>
							<p style='margin-top:9px'>The preview url setting will have the following variables replaced with entry specific attributes allowing you to create highly customisable urls:</p>
							<ul style='overflow:auto;'>
								<li style='width:33%; float:left;'>{url_title}</li>
								<li style='width:33%; float:left;'>{entry_id}</li>
								<li style='width:33%; float:left;'>{weblog_id}</li>
								<li style='width:33%; float:left;'>{title}</li>
								<li style='width:33%; float:left;'>{author_id}</li>
								<li style='width:33%; float:left;'>{status}</li>
								<li style='width:33%; float:left;'>{entry_date_day}</li>
								<li style='width:33%; float:left;'>{entry_date_month}</li>
								<li style='width:33%; float:left;'>{entry_date_year}</li>
								<li style='width:33%; float:left;'>{dst_enabled}</li>
								<li style='width:33%; float:left;'>{comment_total}</li>
								<li style='width:33%; float:left;'>{trackback_total}</li>
								<li style='width:33%; float:left;'>{username}</li>
								<li style='width:33%; float:left;'>{email}</li>
								<li style='width:33%; float:left;'>{screen_name}</li>
							</ul>",

'check_for_updates_title' 	=> 'Check for updates',
'check_for_updates_info' 	=> '{addon_name} can call home, check for recent updates and display them on your CP homepage? This feature requires <a href="http://leevigraham.com/cms-customisation/expressionengine/lg-addon-updater/">LG Addon Updater</a> to be installed and activated.',
'check_for_updates_label' 	=> 'Would you like this extension to check for updates?',

'success_extension_settings_saved'	=> 'Extension settings saved successfully',
'save_extension_settings'	=> 'Save extension settings',

"custom_field"	=> "custom field",
"attribute"		=> "attribute",

// END
''=>''
);
?>