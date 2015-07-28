<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline">
    <fieldset>
		<div class="input-group" style="border: 1px solid #4A4A4A;">
			<input type="text" name="s" id="search" placeholder="<?php _e("Search","wpbootstrap"); ?>" value="<?php the_search_query(); ?>" class="form-control" />
			<span class="input-group-btn">
				<button type="submit" class="btn btn-default" style="border: 0;"><img src="<?php echo THEME_IMG_PATH; ?>/search-icon.svg" alt="search icon" onerror="this.onerror=null; this.src='<?php echo THEME_IMG_PATH; ?>/search-icon.png'"></button>
			</span>
		</div>
    </fieldset>
</form>