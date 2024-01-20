<footer>
    <!-- lefrt -->
    <div id="footer-left">
        <div class="space-y-8">
            <a href="" class="flex items-center gap-3">
                <?php
                if (function_exists("the_custom_logo")) {
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);

                }
                ;
                ?>
                <img src="<?= $logo[0] ?>" alt="company-logo" class="w-10 aspect-square">
                <p class="text-lg font-semibold">Logo</p>
            </a>
            <p class="font-medium">Be saying moveth spirit fruitful called set evening fly give shall moveth
                lesser very.
            </p>
        </div>
        <div class="flex flex-col gap-2">
            <a href="" class="font-medium">
                +62 822 23839318
            </a>
            <a href="" class="font-medium">
                test@test.com
            </a>

        </div>

        <ul class="sosmed flex items-center gap-3">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </div>
    <div id='footer-right'>
        <!-- form subcribtion -->
        <form action="#">
            <p class="text-neutral-500 font-medium text-sm">subscribe to our newsletter</p>
            <input type="email" placeholder=" your email addresss">
        </form>
        <div class="space-y-5">
            <div class='flex gap-10'>
                <ul class='footer-menus'>
                    <li><a href="">About us</a></li>
                    <li><a href="">Career</a></li>
                    <li><a href="">Our Blog</a></li>
                    <li><a href="">Term of Use</a></li>
                </ul class='footer-menus'>
                <ul>
                    <li><a href="">Services</a></li>
                    <li><a href="">Work process</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <ul class='footer-menus'>
                    <li><a href="">Our Team</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href=""> Privacy</a></li>
                </ul>
            </div>
            <small class="block text-right">© 2022. All rights reserved.</small>
        </div>

    </div>
</footer>
</body>

</html>