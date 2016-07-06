<?php
/**
 * The default template for displaying no content
 *
 * @package WPlook
 * @subpackage Morning Time Lite
 * @since Morning Time Lite 1.0
 */

?>

<article <?php post_class("post post-single"); ?> itemscope itemtype="https://schema.org/BlogPosting">
	<header class="page-head">
		<h3 class="widget-title">
			<?php _e( 'Nada encontrado', 'morningtime-lite' ); ?>
		</h3>
	</header><!-- /.post-head -->

	<div class="entry clearfix" itemprop="articleBody">

		<?php if ( is_search() ) : ?>

			<p><?php _e( 'Desculpe, mas nada foi encontrado com a sua pesquisa. Por favor tente novamente com palavras algumas palavras chave diferentes.', 'morningtime-lite' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Não podemos encontrar o que você está procurando. Talvez fazer uma pesquisa possa ajudar.', 'morningtime-lite' ); ?></p>

		<?php endif; ?>
	</div><!-- /.entry -->
</article><!-- /.post -->
