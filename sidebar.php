<aside class="l-sidebar p-sidebar">
            <div class="p-sidebar__btn"><button class="js-sidebar js-sidebar__out">×</button></div>
            <ul class="p-sidebar__list">
                    <?php
                        $args = array(
                            'menu' => 'サイドバーメニュー',
                            'menu_class' => 'p-menu',
                            'container' => false,
                        );
                        echo str_replace('sub-menu', 'p-menu__list', wp_nav_menu( array(
'echo' => false, //（真偽値） （オプション） メニューをHTML出力する(true)か、PHPの値で返す(false)か 初期値： true
) ));
                        wp_nav_menu($args);
                        ?>
                    
            </ul>
</aside>
        
        
        'add_li_class' => 'p-menu__list', // liタグへclass追加
        'add_a_class' => 'p-menu__list__item' // aタグへclass追加

        <!-- <li class="p-sidebar__list__item p-menu">
            <h3 class="p-menu__title c-subtitle02"><a href="http://hamburgersho.local/archive/">バーガー</a></h3>
            <ul class="p-menu__list"> -->
                <!-- <li class="p-menu__list__item"><a href="">ハンバーガー</a></li>
                <li class="p-menu__list__item"><a href="">チーズバーガー</a></li>
                <li class="p-menu__list__item"><a href="">テリヤキバーガ</a></li>
                <li class="p-menu__list__item"><a href="">アボカドバーガ</a></li>
                <li class="p-menu__list__item"><a href="">フィッシュバー</a></li>
                <li class="p-menu__list__item"><a href="">ベーコンバーガ</a></li>
                <li class="p-menu__list__item"><a href="">チキンバーガー</a></li> -->
            <!-- </ul>
        </li>
        <li class="p-sidebar__list__item p-menua">
            <h3 class="p-menu__title c-subtitlea02"><a href="">サイド</a></h3>
            <ul class="p-menu__list">
                <li class="p-menu__list__item"><a href="">ポテト</a></li>
                <li class="p-menu__list__item"><a href="">サラダ</a></li>
                <li class="p-menu__list__item"><a href="">ナゲット</a></li>
                <li class="p-menu__list__item"><a href="">コーン</a></li>
            </ul>
        </li>
        <li class="p-sidebar__list__item p-menua">
            <h3 class="p-menu__title c-subtitlea02"><a href="">ドリンク</a></h3>
            <ul class="p-menu__list">
                <li class="p-menu__list__item"><a href="">コーラ</a></li>
                <li class="p-menu__list__item"><a href="">ファンタ</a></li>
                <li class="p-menu__list__item"><a href="">オレンジ</a></li>
                <li class="p-menu__list__item"><a href="">アップル</a></li>
                <li class="p-menu__list__item"><a href="">紅茶（Ice/t）</a></li>
                <li class="p-menu__list__item"><a href="">コーヒー（IcHot）</a></li>
            </ul>
        </li> -->