<form method="get" id="search" action="<?php bloginfo( 'home'); ?>/">
	<div>
		<input type="text" name="s" id="s" class="find" value="Поиск по сайту" onblur="if (value == '') {value = 'Поиск по сайту'}" onfocus="if (value == 'Поиск по сайту') {value =''}"/>
		<input type="image" src="./wp-content/themes/mitefru/images/find.png" value="<?php _e( 'Найти', 'titan' ); ?>" />
	</div>
</form>
