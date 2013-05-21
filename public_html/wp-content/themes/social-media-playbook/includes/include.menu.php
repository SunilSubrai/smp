		<div id="menu-container">
			<a id="menu-button" class="button-a menu-button" href="#"><span class="arrow">r</span><span class="label">Menu</span></a>
			<div id="menu-instructions"><?php echo strip_tags(get_post(42)->post_content, "<a>"); ?></div>
		</div>