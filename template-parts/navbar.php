<!-- Nav -->
    <nav id="nav">
        <?php 
            wp_nav_menu([
                "theme_location" => "main-massively-menu",
                "menu_class" => "links",
                'container'=> false
            ]);
        ?>
        <!-- <ul class="links">
            <li class="active"><a href="/">This is Massively</a></li>
            <li><a href="generic.html">Generic Page</a></li>
            <li><a href="elements.html">Elements Reference</a></li>
        </ul> -->
        <ul class="icons">
            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class ="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
        </ul>
    </nav>