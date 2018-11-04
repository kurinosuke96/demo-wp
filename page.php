    <?php get_header(); //header.phpを取得 ?>
        <div id="content" class="clearfix">
            <aside>
                <?php get_sidebar(); //sidebar.phpを取得 ?>
            </aside>
            <article>
                
                <?php if ( have_posts()) : // もし投稿があるなら ?>
                    
                    <?php while (have_posts() ) : the_post(); // 繰り返し処理（ループ）開始 ?>
                    
                        <section <?php post_class(); //投稿の種類に応じたクラスを付加 ?>>
                          <h1><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h1>
                          <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
                        </section>
                        
                    <?php endwhile;  // 繰り返し処理終了   ?> 
                
                <?php else : // 投稿がない場合は ?>
                
                    <h2>投稿が見つかりません。</h2>
                    <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
                    
                <?php endif; // 条件分岐終了 ?>
                    
            </article>
        </div>
    <?php get_footer(); ?>
        