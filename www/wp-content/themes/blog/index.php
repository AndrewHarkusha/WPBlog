<?php get_header()?>
            <div class="col-md-9">
                <div class="posts">
                <?php while(have_posts()): the_post();?>
                <div class="post-preview">
                    <?php if(has_post_thumbnail()){?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink();?>" title="<?php the_title_attribute()?>"><?php the_post_thumbnail('thumbnail')?></a>
                        </div>
                    <?php } ?>
                    <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                    <?php the_content('Читать дальше');?>
                    <br><a href="<?php the_permalink();?>#comments">
                        <?php comments_number('Нет комментариев', 'Комментариев (1)', 'Комментариев (%)')?></a><br>
                </div>
                <?php endwhile?>
                </div>
                <?php pagination(); ?>
            </div>
        <?php get_template_part('sidebar')?>
<?php get_footer()?>