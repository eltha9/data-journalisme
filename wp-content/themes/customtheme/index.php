<?php get_header(); //appel du template header.php  ?>

<section class="front-page">

       <?php show_recent_article()?>

       <div class="popular">
            <div class="popular-title"><h1>Nos video</h1></div>
            <div class="sidescroll">

                <?php fake_articles_home()?>
                
            </div>
        </div>

        <div class="filters">
            <a href="">All</a>
            <a href="">Articles</a>
            <a href="">Interview</a>
        </div>

        <div class="other">

            <div class="wraps">
                <?php fake_articles()?>
            </div>

        </div>

    </section>

<?php get_footer(); //appel du template footer.php ?>