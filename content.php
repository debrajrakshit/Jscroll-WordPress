<?php 

/*	Template for Standard Post */

global $your_class_general_options;
?>
<div class="infinite-selector"><!-- Here I placed my Content Selector for Jscroll -->
<section id="" class="" >
        <div class="" role="">
          <div class="row">
            <div class="col-md-8">
            	<article class="scroll" <?php post_class('clearfix') ?> id="post-<?php the_ID(); ?>" role="article">
            		<header>
            			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            		</header>

            		<div class="entry-content">
            			<!-- Show content in full post with readmore on in Exceprt based from theme options -->

            			<?php if ($wpbootstrap_scripts_with_jquery_general_options['content_options']  == 'default' ) : ?>

            			<?php the_excerpt(); ?>
            			<?php else: ?>

            			<?php the_content("Readmore.."); ?>
            			<?php endif;?>
            		</div>
            	</article>
            	<!-- End article -->
            </div>
          </div>
        </div>
</section>
<hr class="content-separator" />

</div>
<div class="clearfix"></div>

