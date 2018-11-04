<?php get_header(); //header.phpを取得 ?>
        <div id="content" class="clearfix">
            <aside>
                <?php get_sidebar(); //sidebar.phpを取得 ?>
            </aside>
            <article>
                
                <h3 id =error>404 ERROR. PAGE NOT FOUND.</h3>
                 
                <?php
                      //　--------- 新着情報を3件表示　---------
                      $args = array(
                        'category_name'  => 'staff',  // カテゴリー「staff」を読み込む
                        'posts_per_page' => 3        // 表示数　3件
                      );
                      $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
                      if ( $the_query->have_posts() ) :
                      // ここから表示する内容を記入
                      ?>
                
                      <section>
                        <h2 class="section-title">スタッフブログ</h2>
                        <ul class="staff-list">
                
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                        // -------- ここから繰り返し---------- ?>
                
                          <li>
                            <span class="date"><?php the_time('Y.m.j'); ?></span>
                            <span class="label-info">BLOG</span>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </li>
                
                        <?php // -------- 繰り返しここまで-----------
                        endwhile; ?>
                
                        </ul>
                        <div class="center">
                            <a href="<?php echo home_url(); ?>/category/staff/" class="btn btn-default">スタッフブログ一覧</a>
                        </div>
                      </section>
                
                      <?php
                      // -------- 新着情報WP_query終了-----------
                      wp_reset_postdata();
                      endif;
                      ?>
                
            </article>
        </div>
    <?php get_footer(); ?>
        