<?php /* Arclite/digitalnature */ ?>

 <!-- footer -->
 <div id="footer">

  <!-- page block -->
  <div class="block-content">

    <?php include(TEMPLATEPATH . '/footer-widgets.php'); ?>

    <?php if(get_option('arclite_footer')<>'') { ?>
    <div class="add-content">
      <?php print get_option('arclite_footer'); ?>
    </div>
     <?php } ?>

    <div class="copyright">
     <p>
     <!-- please do not remove this. respect the authors :) -->
     <?php
      printf(__('Arclite theme by %s', 'arclite'), '<a href="http://digitalnature.ro/projects/arclite">digitalnature</a>');
      print ' | ';
      printf(__('powered by %s', 'arclite'), '<a href="http://wordpress.org/">WordPress</a>');
      print ' | ';
      print 'Header image courtesy <a href="http://www.flickr.com/photos/alex-s/3033179784/">alex-s</a>';
      print ' | ';
      print '<a rel="license" href="http://creativecommons.org/licenses/by-nc/3.0/"><img class="creativecommons" alt="Creative Commons License" height="15" style="border-width:0" src="http://i.creativecommons.org/l/by-nc/3.0/80x15.png" /></a>'
     ?>
     </p>
     <!--/unnecessary for this use/
     <p>
     <a class="rss" href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','arclite'); ?></a> <?php _e('and','arclite');?> <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)','arclite'); ?></a> <a href="javascript:void(0);" class="toplink">TOP</a>
		<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.
     </p>
     -->
    </div>

  </div>
  <!-- /page block -->

 </div>
 <!-- /footer -->

</div>
<!-- /page -->
<?php wp_footer(); ?>
</body>
</html>



