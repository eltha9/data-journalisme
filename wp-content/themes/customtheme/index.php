<?php get_header(); //appel du template header.php  ?>

<section class="front-page">

        <div class="daily-article">
            <div class="daily-title"><h1>Article of the day</h1></div>
            <img src="<?=get_template_directory_uri().'/assets/images/image.png'?>" alt="">
            <div class="card">
                <div class="card-title">
                    <h4>The Different Types Of Laser Eye Surgery</h4>
                </div>
                <div class="card-specs">
                    <div class="card-author">
                        <small>By Marc Curtis, 31 Oct 2019</small>
                    </div>
                    <div class="card-btn">
                        <img src="<?=get_template_directory_uri().'/assets/images/bookmark.svg'?>" alt="bookmark">
                        <img src="<?=get_template_directory_uri().'/assets/images/share.svg'?>" alt="share">
                    </div>
                </div>
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

        <div class="popular">
            <div class="popular-title"><h1>Popular Articles</h1></div>
            <div class="sidescroll">

                <?php fake_articles_home()?>
                
            </div>
        </div>
        

    </section>

<?php get_footer(); //appel du template footer.php ?>