<article class="c-wrapper p-main__conts--archive">
<?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post();
            ?>
                <figure class="p-main__conts--archive__card p-card">
                    <a class="p-card__link" href="">
                        <img class="c-img__burger" src="./images/archive/card_img.jpg" alt="">
                        <figcaption class="c-card">
                            <h3 class="c-subtitle02 c-card__title"><?php the_title(); ?></h3>
                            <h4 class="c-subtitle03 c-card__subtitle">小見出しが入ります</h4>
                            <p class="c-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                            <div class="c-card__button">
                                <a class="c-card__button__text" href="" >詳しく見る</a>
                            </div>
                        </figcaption>
                    </a>
                    </figure>
                    <?php
                    endwhile;
                    else :
                        ?><p>お探しの商品は見つかりませんでした</p>
                        <?php
                    endif;
                    ?>
            </article>