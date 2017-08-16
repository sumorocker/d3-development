<?php
/**
 * @package understrap
 */
?>
<div class="col-m-8">
			<ul id="categories">
				<li><?php _e('Categories:'); ?>
						<?php wp_list_cats( 'exclude=1,9,3'); ?>
				</li>
			</ul>
</div>