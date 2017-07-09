		<form method="get" class="search-bar" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'titan' ); ?>" value="<?php echo get_search_query(); ?>" name="s" onfocus="if(this.value==this.getAttribute('placeholder'))this.value='';" onblur="if(this.value=='')this.value=this.getAttribute('placeholder');"/>
				<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'titan' ) ?>"/>
		</form>