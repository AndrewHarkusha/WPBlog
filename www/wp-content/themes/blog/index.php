<?php get_header()?>
            <div class="col-md-9">
                <?php while(have_posts()): the_post();?>
                <div class="post-preview">
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <?php the_content('Читать дальше');?>
                </div>
                <?php endwhile?>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <?php dynamic_sidebar('right_sidebar')?>
                </div>
            </div>
<?php get_footer()?>