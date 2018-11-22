<div class="padder ee<?=$ee_ver?> structure-gui">
	<div id="structure-ui">
		<div id="tree-header">
			<ul id="tree-controls">
				<li <?php if (count($valid_channels) > 1):?>class="tree-add"<?php endif; ?>><a href="<?=$add_page_url?>" class="pop" title="pop"><?=lang('ootb_add_first_page')?></a></li>
			</ul>
		</div> <!-- close #tree-header -->
		<div id="tree-ootb">
			<h1><?=lang('ootb_title')?></h1>
			<p><?=lang('ootb_intro')?>.</p>
			<ul>
				<li class="ootb-page-types">
					<span class="ootb-intro"><strong><?=lang('ootb_title_page_types')?>:</strong> <?=lang('ootb_copy_page_types')?>.</span>
					<span class="ootb-go"><a href="http://buildwithstructure.com/documentation/page_types_whats_the_difference_between_a_page_listing_and_asset/" target="_blank"><?=lang('ootb_read_page_types')?> &rarr;</a></span>
				</li>
				<li class="ootb-settings">
					<span class="ootb-intro"><strong><?=lang('ootb_title_channel_settings')?>:</strong> <?=lang('ootb_copy_channel_settings')?>.</span>
					<span class="ootb-go"><a href="http://buildwithstructure.com/documentation/channel_settings/" target="_blank"><?=lang('ootb_read_channel_settings')?> &rarr;</a></span>
				</li>
				<li class="ootb-settings">
					<span class="ootb-intro"><strong><?=lang('ootb_title_module_settings')?>:</strong> <?=lang('ootb_copy_module_settings')?>.</span>
					<span class="ootb-go"><a href="http://buildwithstructure.com/documentation/giving_clientsmembers_access_to_structure/" target="_blank"><?=lang('ootb_read_module_settings')?> &rarr;</a></span>
				</li>
				<li class="ootb-navigation-tags">
					<span class="ootb-intro"><strong><?=lang('ootb_title_nav_tag')?>:</strong> <?=lang('ootb_copy_nav_tag')?>.</span>
					<span class="ootb-go"><a href="http://buildwithstructure.com/tags#tag_navigation" target="_blank"><?=lang('ootb_read_nav_tag')?> &rarr;</a></span>
				</li>
			</ul>
		</div> <!-- close #tree-ootb -->
	</div> <!-- close #structure-ui -->
</div> <!-- close .padder -->