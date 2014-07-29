

<?php get_header(); ?>


<?php get_sidebar('primary'); ?>

<div class="clearfix"></div>

<div class="clearfix"></div>
<section id="" class="" >
          <div class="row">
            <div class="col-md-8">

				      <?php if(have_posts()) : ?>

						<div class="top-content">
							<h5><?php single_cat_title( __('More from: ', 'class_name'), true ); ?></h5>
							<hr class="content-separator">
						</div> 

					<?php while(have_posts()) : the_post(); ?>			
						<!-- The Loop of Post -->
						<?php get_template_part('content', get_post_format()); ?>
						
						<!-- If post format content, show post format content items -->
						
					<?php endwhile; else :  ?>
						<!-- If no Post Found -->
						<h1><?php _e("No post were Found", "class_name") ?></h1>

					<?php endif; ?>

					<div class="infinite-selector">
						<!-- Pagination for older/newer post -->
						<?php class_name_pagination(); ?> <!-- "class_name" is your theme class mentioned for apply classes in specific items -->
						<!-- End nav-below -->	
					</div>

            </div>

            <div class="col-md-4">
              <?php get_sidebar('primary'); ?>
            </div>
          </div>

          <div class="bb-comment-area" id="comments">
            <?php comments_template('', true); ?>
          </div>
          <!-- End comment-area -->
</section>
<div class="clearfix"></div>

<?php get_sidebar('secondary'); ?>


<?php get_footer(); ?>

