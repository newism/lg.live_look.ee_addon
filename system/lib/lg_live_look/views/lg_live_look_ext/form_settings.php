<div class="tg">
	<h2><?php print str_replace("{addon_name}", $this->name, $LANG->line("enable_extension_title")); ?></h2>
	<table>
		<tbody>
			<tr class="even">
				<th>
					<?php echo str_replace("{addon_name}",  $this->name, $LANG->line("enable_extension_label")); ?>
				</th>
				<td>
					<?php print $this->select_box(
						$settings["enabled"],
						array("1" => "yes", "0" => "no"),
						"enabled"
					); ?>
				</td>
			</tr>			<tr class="odd">
				<th>
					<?php print $LANG->line('which_groups_label'); ?>
				</th>
				<td>
					<?php
						foreach($member_group_query->result as $member_group) :
						$checked = in_array($member_group['group_id'], $settings['allowed_member_groups']) ? "checked='checked'" : "";
					?>
						<label class="checkbox">
							<input
								<?php print $checked ?>
								type="checkbox"
								name="allowed_member_groups[]"
								value="<?php print $member_group['group_id'] ?>"
							/>
							<?php print $member_group['group_title'] ?>
						</label>
					<?php endforeach; ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="tg">
	<h2><?php print $LANG->line("weblog_customisation_title")?></h2>
	<div class="info"><?php print $LANG->line("weblog_customisation_info")?></div>
	<?php if ($weblog_query->num_rows > 0) : $i = 0; ?>
	<table>
			<?php 
				foreach($weblog_query->result as $row) :
					$class = ($i % 2) ? 'even':'odd';
					$weblog_settings = $this->settings['weblogs'][$row['weblog_id']];
			 ?>
			<tr class='<?php print $class; ?>'>
				<th rowspan='4' width='150px'><?php print $row['blog_title']; ?></th>
				<th class='sub-heading'><?php print $LANG->line('display_tab_label'); ?></th>
				<td>
					<?php print $this->select_box(
						$weblog_settings['display_tab'],
						array(1 => "yes", 0 => "no"),
						"weblogs[{$row['weblog_id']}][display_tab]");
					?>
				</td>
			</tr>
			<tr class='<?php print $class; ?>'>
				<th class='sub-heading'><?php print $LANG->line('display_link_label'); ?></th>
				<td>
					<?php print $this->select_box(
						$weblog_settings['display_link'],
						array(1 => "yes", 0 => "no"),
						"weblogs[{$row['weblog_id']}][display_link]");
					?>
				</td>
			</tr>
			<tr class='<?php print $class; ?>'>
				<th class='sub-heading'><?php print $LANG->line('disable_preview_label'); ?></th>
				<td>
					<?php print $this->select_box(
						$weblog_settings['disable_preview'],
						array(1 => "yes", 0 => "no"),
						"weblogs[{$row['weblog_id']}][disable_preview]");
					?>
				</td>
			</tr>
			<tr class='<?php print $class; ?>'>
				<th class='sub-heading'><?php print $LANG->line('live_look_path_label'); ?></th>
				<td>
					<?php print $DSP->input_text("weblogs[{$row['weblog_id']}][live_look_path]", $weblog_settings['live_look_path'], '', ''); ?>
				</td>
			</tr>
			<?php endforeach; ?>
	</table>
	<?php else: ?>
	<div class="mor-alert error"><?php print $LANG->line('no_weblogs_msg') ?></div>
	<?php endif; ?>
</div>

<div class="tg">
	<h2><?php print $LANG->line("check_for_updates_title") ?></h2>
	<div class="info"><?php print str_replace("{addon_name}", $this->name, $LANG->line("check_for_updates_info")); ?></div>
	<table>
		<tbody>
			<tr class="odd">
				<th><?php print $LANG->line("check_for_updates_label") ?></th>
				<td>
					<select<?php if(!$lgau_enabled) : ?> disabled="disabled"<?php endif; ?> name="check_for_updates">
						<option value="y"<?php print ($settings["check_for_updates"] == "y" && $lgau_enabled === TRUE) ? 'selected="selected"' : ''; ?>>
							<?php print $LANG->line("yes") ?>
						</option>
						<option value="n"<?php print ($settings["check_for_updates"] == "n" || $lgau_enabled === FALSE) ? 'selected="selected"' : ''; ?>>
							<?php print $LANG->line("no") ?>
						</option>
					</select>
					<?php if(!$lgau_enabled) : ?>
						&nbsp;
						<span class='highlight'>LG Addon Updater is not installed and activated.</span>
						<input type="hidden" name="check_for_updates" value="0" />
					<?php endif; ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<input type="submit" value="<?php print $LANG->line('save_extension_settings') ?>" />
