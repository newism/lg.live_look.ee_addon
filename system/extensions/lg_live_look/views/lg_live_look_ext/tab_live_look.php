<!-- Start LG Live Look Tab -->
<div id='blockllp' class='mor pt'>
	<div>
		<?php if($entry_id == FALSE) : ?>
			<h1>Live Look</h1>
			<div class="mor-alert error"><?php print $LANG->line('save_entry_msg'); ?></div>
		<?php else: ?>
		<h1>
			LG Live Look
			<small>&ndash; <a href="<?php print $preview_url ?>">
			<?php if(($draft_id = $IN->GBL("draft_id")) !== FALSE) : ?>
				Draft # <?php print $draft_id ?>
			<?php elseif(($version_id = $IN->GBL("version_id")) !== FALSE) : ?>
				Version # <?php print $version_id ?>
			<?php elseif(($preview_id = $IN->GBL("preview_id")) !== FALSE) : ?>
				Preview # <?php print $preview_id ?>
			<?php else : ?>
				Entry  # <?php print $entry_id ?> <small>(latest revision)</small>
			<?php endif; ?>
			</a></small>
		</h1>
		<p class='top'>
			<a href='#' class='btn toggle enlarge-iframe'>
				<?php print $LANG->line('enlarge_iframe') ?>
			</a>
				&nbsp;&nbsp;&nbsp;
			<a href='#' class='btn toggle collapse shrink-iframe'>
				<?php print $LANG->line('shrink_iframe') ?>
			</a>
		</p>
		<div class='iframe-wrap'>
			<iframe id='llp_frame' src=''></iframe>
		</div>
		<p>
			<a href='#' class='btn toggle enlarge-iframe'>
				<?php print $LANG->line('enlarge_iframe') ?>
			</a>
				&nbsp;&nbsp;&nbsp;
			<a href='#' class='btn toggle collapse shrink-iframe'>
				<?php print $LANG->line('shrink_iframe') ?>
			</a>
		</p>
		<?php endif; ?>
	</div>
</div>
<!-- End LG Live Look Tab -->