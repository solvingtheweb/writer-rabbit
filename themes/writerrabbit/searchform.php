<form method="get" id="searchFormOuter" action="<?php bloginfo('url'); ?>/">
<label style="display:none;" for="s"><?php _e('Search for:'); ?></label>
<div id="searchFormInner">
	<input type="text" value="Enter Keyword" name="s" id="s" class="search_field" onfocus="if (this.value == 'Enter Keyword') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter Keyword';}" />
	<input type="submit" id="searchSubmit" value="Search" />
</div>
</form>