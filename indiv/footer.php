            </main>
        </div>
    </div>
    <footer>
        <?php wp_footer(); ?>
        <div class="copyright">
            <p><?php printf( __('%s - All rights reserved &copy; %s', 'indiv'), get_bloginfo('name'), date_i18n( 'Y' ) ); ?></p>
        </div>
        <div class="footer-links">
            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'footer',
                ) );
            ?>
        </div>
    </footer>
    </body>
</html>