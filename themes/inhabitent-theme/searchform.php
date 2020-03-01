<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset style='display: inline;'>
		<a href='#' class="search-submit">
			<i class="icon-search fa fa-search"></i>
		</a>
		<label>
			<input id='search-field-header' type="search" class="search-field-hidden" placeholder="SEARCH AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<input type="submit" id="search-submit" class="screen-reader-text" value="Search">
	</fieldset>
</form>
