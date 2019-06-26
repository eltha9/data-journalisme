<?php

add_action('wp_head', 'style');

function style(){
    wp_register_style( 'main_style', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_enqueue_style( 'main_style' );
    // cart style
    wp_register_style( 'chart_style', get_template_directory_uri() . '/assets/css/chart.css' );
    wp_enqueue_style( 'chart_style' );
}

add_action('wp_footer', 'script');

function script(){
    wp_register_script( 'main_script', get_template_directory_uri() . '/assets/script/home.js' );
    wp_enqueue_script( 'main_script' );
    // chart script

    //exté
    wp_register_script( 'hc_script','https://code.highcharts.com/highcharts.js' );
    wp_enqueue_script( 'hc_script' );

    wp_register_script( 'hc_map_script','http://code.highcharts.com/maps/modules/map.js' );
    wp_enqueue_script( 'hc_map_script' );

    wp_register_script( 'hc_map_data_script','https://code.highcharts.com/mapdata/countries/fr/fr-all-all.js' );
    wp_enqueue_script( 'hc_map_data_script' );

    wp_register_script( 'hc_items_script','https://code.highcharts.com/modules/item-series.js' );
    wp_enqueue_script( 'hc_items_script' );

    //inté
    wp_register_script( 'app_script', get_template_directory_uri() . '/assets/script/app.fetch.js' );
    wp_enqueue_script( 'app_script' );

    wp_register_script( 'map_script', get_template_directory_uri() . '/assets/script/map.js' );
    wp_enqueue_script( 'map_script' );
    
    wp_register_script( 'chart_script', get_template_directory_uri() . '/assets/script/chart.js' );
    wp_enqueue_script( 'chart_script' );

    wp_register_script( 'chart_asthme_script', get_template_directory_uri() . '/assets/script/chart_asthme.js' );
    wp_enqueue_script( 'chart_asthme_script' );
}


function add_comment(){
    $comments= json_decode(file_get_contents('wp-content/themes/customtheme/assets/data/comments.json'));

    $new_comment = new stdClass();
    $new_comment->author = htmlspecialchars( $_POST['author']);
    $new_comment->mail = htmlspecialchars( $_POST['mail']);
    $new_comment->date = time();
    $new_comment->avatar = get_template_directory_uri().'/assets/images/author.png';
    $new_comment->content =htmlspecialchars( $_POST['content']);

    array_push($comments, $new_comment);

    file_put_contents('wp-content/themes/customtheme/assets/data/comments.json',json_encode($comments));
}

function show_comments(){
    $comments = json_decode(file_get_contents('wp-content/themes/customtheme/assets/data/comments.json'));

    foreach( $comments as $comment):

    ?>
    <div class="author">
        <img src="<?= $comment->avatar ?>" alt="author">
        <div class="author-info">
            <div class="author-wrap">
                <div class="author-name"><span><?= $comment->author?></span></div>
                <button>
                    <svg width="24" height="6" viewBox="0 0 24 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 3C6 4.657 4.657 6 3 6C1.343 6 0 4.657 0 3C0 1.343 1.343 0 3 0C4.657 0 6 1.343 6 3ZM15 3C15 4.657 13.657 6 12 6C10.343 6 9 4.657 9 3C9 1.343 10.343 0 12 0C13.657 0 15 1.343 15 3ZM21 6C22.657 6 24 4.657 24 3C24 1.343 22.657 0 21 0C19.343 0 18 1.343 18 3C18 4.657 19.343 6 21 6Z" fill="#757675"/>
                    </svg>
                </button> 
            </div>
            <div class="date"><small><?=date('d M Y', $comment->date) ?></small></div>               
        </div>
    </div> 
    <div class="content">
        <p><?=$comment->content?></p>
    </div>
    <?php
    endforeach;
}

function fake_articles(){
    $articles = json_decode(file_get_contents('wp-content/themes/customtheme/assets/data/fake_article.json'));


    foreach($articles as $article):
    ?>
    <div class="other-wrap">
        <div class="flex">
            <div class="other-title"><h3><?=$article->title ?></h3></div>
            <div class="author"><span>By <?= $article->author?></span></div>
            <div class="date"><small><?= $article->date?></small></div>
        </div>
        <div class="other-img">
            <img src="<?=$article->image?>" alt="other-img">
            <div class="background other2"></div>
        </div>
    </div>
    <?php
    endforeach;
}

function fake_articles_home(){
    $articles = json_decode(file_get_contents('wp-content/themes/customtheme/assets/data/fake_article.json'));


    foreach($articles as $article):
    ?>
    <div class="wrap">
        <div class="card-img">
            <img src="<?=$article->image?>" alt="popular">
        </div>
        <div class="card">
            <div class="card-title"><h4><?= $article->title?></h4></div>
            <div class="card-author">
                <small>By <?=$article->author.', '.$article->date?></small>
            </div>
        </div>
    </div>
    <?php
    endforeach;
}

function show_recent_article(){
    ?>
    <div class="daily-article">
        <div class="daily-title"><h1>Dossier de la semaine</h1></div>
        <img src="<?=get_template_directory_uri().'/assets/images/image.png'?>" alt="">
        <div class="card">
            <div class="card-title">
                <h4><a href="http://localhost:8888/data_journalisme/2019/06/23/le-diabete-cest-quoi/">The Different Types Of Laser Eye Surgery </a></h4>
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
    <?php
}
