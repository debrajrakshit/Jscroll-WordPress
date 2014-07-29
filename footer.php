</div> <!-- Main Wrapper -->
<div class="clearfix"></div>
    <!-- Footer -->
    <footer id="footer">
	<!-- Footer template modules -->
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.jscroll.min.js"></script>
    <script>$('.infinite-selector').jscroll({
    loadingHtml: '<img src="loading.gif" alt="Loading" /> Loading...',
    padding: 20,
    nextSelector: '#nav-below a:first',
    contentSelector: '.infinite-selector'
    });</script>
	
    <?php wp_footer(); ?>

  </body>
</html>