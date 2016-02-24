<?php get_header()?>
            <div class="col-md-9">
                <?php while(have_posts()): the_post();?>
                <div class="post-preview">
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <?php the_content('Читать дальше');?>
                </div>
                <?php endwhile?>
            </div>
        <?php get_template_part('sidebar')?>
<?php get_footer()?>