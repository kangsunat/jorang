<footer class="text-neutral-500">
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
        <form action="#" class="space-y-4">
            <p class="text-neutral-700 font-medium text-sm">subscribe to our newsletter</p>
            <div
                class="flex gap-3 items-center justify-between border-x-0 border-t-0 border-b-neutral-800 text-neutral-500 border-b-2">
                <input type="email" placeholder=" your email addresss"
                    class="bg-transparent focus:ring-0 border-none px-0 w-full placeholder:text-neutral-500">
                <button>Send</button>
            </div>
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