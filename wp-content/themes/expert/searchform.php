<form class="ast-search" role="search" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
	<input value="<?php echo __('Search...','sp_webBusiness'); ?>" class="ast-search-input" type="text" onclick="this.value='';" onblur="this.value=!this.value?'Search...':this.value;" name="s" />
	<input class="ast-search-submit" type="submit" value="Search" />
</form>