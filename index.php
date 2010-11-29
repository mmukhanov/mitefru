<?php get_header(); ?>
	<?php if( ( is_front_page() || is_home()) && !is_paged() ) { ?>
		<div class="welcome_message">
		  <div class="post-header"><h2>Добро пожаловать на сайт Предпринимательского форума MIT!</h2></div>
		<div class="entry clear">
Предпринимательский Форум MIT России — это площадка для свободного общения всех сторон, заинтересованных в технологическом
предпринимательстве и успешной коммерциализации перспективных разработок.

Форум способствует распространению передового предпринимательского опыта, облегчает доступ предпринимателей к капиталу,человеческим ресурсам и экспертизе, и устанавливает связи между российской и зарубежными инновационными экосистемами.	<br />
<a href="http://www.takle.ru/%D0%BE-%D0%BD%D0%B0%D1%81/" title="<?php printf(__ ( 'О MITEF подробнее')); ?>" class="more-link"><?php printf(__ ( 'О MITEF подробнее')); ?></a>
		</div>
		</div>
	<?php } ?>	
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="post-header">
			<div class="date"><?php the_time(__ ( 'M j', 'titan')); ?> <span><?php the_time( 'y' ); ?></span></div>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="author"><?php printf(__ ( 'Опубликовал %s', 'titan'), get_the_author()); ?></div>
		</div><!--end post header-->
		<div class="entry clear">
			<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail( array(250,9999), array( 'class' => ' alignleft border' )); ?>
			<?php the_excerpt(__( 'read more...', 'titan')); ?> <a href="<?php the_permalink(); ?>" title="<?php printf(__ ( 'Читать полностью')); ?> <?php the_title(); ?>" class="more-link"><?php printf(__ ( 'Читать полностью')); ?></a>
			<?php edit_post_link(__( 'Редактировать', 'titan')); ?>
			<?php wp_link_pages(); ?>
		</div><!--end entry-->
		<div class="post-footer">
			<div class="comments"><?php comments_popup_link(__ ( 'Оставить комментарий', 'titan'), __ ( '1 комментарий', 'titan'), __ngettext ( '% комментарий', '% комментария(ев)', get_comments_number (),'titan')); ?></div>
		</div><!--end post footer-->
	</div><!--end post-->
	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	<div class="navigation index">
		<div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'titan')); ?></div>
		<div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'titan')); ?></div>
	</div><!--end navigation-->
	<?php else : ?>
	<?php endif; ?>
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>