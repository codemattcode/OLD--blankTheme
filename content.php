<!-- BLOG PAGE - POST LIST -->

<article>


<!-- add post title link / title -->
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

<!-- add feature image thumbnail -->
      <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
      </div>
    

<!-- add post excerpt/content -->
    <p><?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
    </p>
    

</article>
