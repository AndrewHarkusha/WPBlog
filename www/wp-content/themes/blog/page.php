<?php get_header()?>
            <div class="col-md-9">
                <?php the_post();?>
                <div class="post">
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
            </div>
        <?php get_template_part('sidebar')?>
<?php get_footer()?>