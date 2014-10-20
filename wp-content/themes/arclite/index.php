<?php
 /* Arclite/digitalnature */
 get_header();
?>

<!-- main wrappers -->
<div id="main-wrap1">
 <div id="main-wrap2">

  <!-- main page block -->
  <div id="main" class="block-content">
   <div class="mask-main rightdiv">
    <div class="mask-left">

     <!-- first column -->
     <div class="col1">
      <div id="main-content">

       <?php if (have_posts()) : ?>
       <?php while (have_posts()) : the_post(); ?>

        <!-- post -->
        <div id="post-<?php the_ID(); ?>" <?php if (function_exists("post_class")) post_class(); else print 'class="post"'; ?>>

          <div class="post-header">
           <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent Link:','arclite'); echo ' '; the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
           <p class="post-date">
            <span class="month"><?php the_time(__('M','arclite')); ?></span>
            <span class="day"><?php the_time(__('j','arclite')); ?></span>
           </p>
           <p class="post-author">
            <span><?php printf(__('Posted by %s in %s','arclite'),'<a href="'. get_author_posts_url(get_the_author_ID()) .'" title="'. sprintf(__("Posts by %s","arclite"), attribute_escape(get_the_author())).' ">'. get_the_author() .'</a>',get_the_category_list(', '));
            global $id, $comment;
            $number = get_comments_number( $id );
           ?> | <a class="<?php if($number<1) { echo 'no '; }?>comments" href="<?php comments_link(); ?>"><?php comments_number(__('No Comments','arclite'), __('1 Comment','arclite'), __('% Comments','arclite')); ?></a> <?php edit_post_link(__('Edit','arclite'),' | '); ?>
            </span>
           </p>
          </div>

          <div class="post-content clearfix">
          <?php if(get_option('arclite_indexposts')=='excerpt') the_excerpt(); else the_content(__('Read the rest of this entry &raquo;', 'arclite')); ?>

          <?php
           $posttags = get_the_tags();
           if ($posttags) { ?>
            <p class="tags"> <?php the_tags(__('Tags:','arclite').' ', ', ', ''); ?></p>
          <?php } ?>
          </div>

        </div>
        <!-- /post -->


       <?php endwhile; ?>

       <div class="navigation" id="pagenavi">
       <?php if(function_exists('wp_pagenavi')) : ?>
        <?php wp_pagenavi() ?>
 	   <?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','arclite')) ?></div>
        <div class="clear"></div>
       <?php endif; ?>
       </div>
       <?php else : ?>
       <h2><?php _e("Not Found","arclite"); ?></h2>
       <p class="error"><?php _e("Sorry, but you are looking for something that isn't here.","arclite"); ?></p>
       <?php get_search_form(); ?>
       <?php endif; ?>

      </div>
     </div>
     <!-- /first column -->
     <?php get_sidebar(); ?>

    </div>
   </div>
   <div class="clear-content"></div>
  </div>
  <!-- /main page block -->

 </div>
</div>
<!-- /main wrappers -->

<?php get_footer(); ?>
