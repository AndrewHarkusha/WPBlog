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
                    <div class="panel panel-default">
                        <div class="panel-heading">Категории:</div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Категория 1</a></li>
                                <li><a href="#">Категория 2</a></li>
                                <li><a href="#">Категория 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Записи:</div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="#">Запись 1</a></li>
                                <li><a href="#">Запись 2</a></li>
                                <li><a href="#">Запись 3</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<?php get_footer()?>