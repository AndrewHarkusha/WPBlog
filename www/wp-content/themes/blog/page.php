<?php get_header()?>
            <div class="col-md-9">
                <?php the_post();?>
                <div class="post">
                    <h1><?php the_title();?></h1>
                    <?php the_content();?>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar">
                    <?php dynamic_sidebar('right_sidebar')?>
                </div>
            </div>
<?php get_footer()?>