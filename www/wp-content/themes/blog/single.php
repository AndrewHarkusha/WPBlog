<?php get_header()?>
            <div class="col-md-9">
                <?php the_post();?>
                <div class="post">
                    <?php if(has_post_thumbnail()){?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink();?>" title="<?php the_title_attribute()?>"><?php the_post_thumbnail('thumbnail')?></a>
                        </div>
                    <?php } ?>
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
                <?php if(comments_open()){ ?>
                    <div class="comments">
                        Комментариев - <?php comments_number()?><br>
                    <?php comments_template() ?>
                    </div>
                <?php } ?>

            </div>
        <?php get_template_part('sidebar')?>
<?php get_footer()?>