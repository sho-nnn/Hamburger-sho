<footer class="l-footer p-footer">
            <ul class="p-footer__list">
            <?php
                        $args = array(
                            'menu' => 'フッターナビ',
                            'menu_class' => '',
                            'container' => false,
                            'theme_location' => 'footer-menu'
                        );
                        wp_nav_menu($args);
                        ?>

                <!-- <li><a href="http://hamburgersho.local/shop_info/">ショップ情報</a></li>
                <li><a href="">ヒストリー</a></li> -->
            </ul>
            <p class="p-footer__copyright">Copyright: RaiseTech</p>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>



<!-- c-text p-footer__list__item -->