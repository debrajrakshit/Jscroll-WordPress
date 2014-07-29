Jscroll-WordPress
=================

Jscroll for WordPress theme made with Bootstrap

This is how you can implement jscroll orginally developed by https://github.com/pklauzinski within any WordPress theme.
I have used this to create for Category/Archive template. And it worked really well.

Just sharing how did I achieved this. Hope that helps you guys looking for the similar solution.

Please follow all the instruction to use Jscroll from author url https://github.com/pklauzinski/jscroll

## Usage

Add this code into `footer.php`

```javascript
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jscroll.min.js"></script>
```
I have added class to load contents is `infinite-selector` and the ID for the pagination container is `nav-below` in `functions.php`

```javascript
<script>
$('.infinite-selector').jscroll({
    loadingHtml: '<img src="loading.gif" alt="Loading" /> Loading...',
    padding: 20,
    nextSelector: '#nav-below a:first',
    contentSelector: '.infinite-selector'
});
</script>
```

Add a class to the pagination of `category.php` or `archive.php`

I used `infinite-scroll` class for my `contentSelector`

```php
<div class="infinite-selector">
						<!-- Pagination for older/newer post -->
						<?php class_name_pagination(); ?> <!-- "class_name" is your theme class mentioned for apply classes in specific items -->
						<!-- End nav-below -->	
</div>
```

Create post template with `content.php` and add `infinite-selector` as the main content area.
```php
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
```
Notice that I have used Bootstrap classes as I have created my theme with Bootstrap. You can use your own classes.

Add these lines in `functions.php`
```php
/* Pagination */

function get_your_class_pagination(){
?>
	<nav class="pagination clearfix" id="nav-below" role="navigation">
		<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
	</nav>
<?php
}
```

I have few additional files into my theme called `yourthemename.php` and `html.php`
These files are to add additional styles to the pagination, contents, etc. These files are to specify class funcution to pagination, etc. You can use your own class in the place of `your_class` and rename `yourthemename.php` to your theme name.

## Options

Please follow all the instruction to use Jscroll from author url https://github.com/pklauzinski/jscroll

## LICENSES:

* MIT: http://www.opensource.org/licenses/mit-license.php
* GPL-2.0: http://www.gnu.org/licenses/gpl-2.0.html
