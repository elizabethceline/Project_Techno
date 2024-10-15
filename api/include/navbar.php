<header class="header flex flex-col items-center" id="header">
    <nav class="nav container1 w-[90%] lg:w-full">
        <a href="#" class="nav__logo">EduRide</a>

<!-- Nih request uri ngikuti server punten 🙏🙏 -->
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="home.php" class="nav__link <?php if($_SERVER['REQUEST_URI'] == "/home.php") { ?>active-link<?php }  ?>">
                        <i class='bx bx-home-alt nav__icon'></i>
                        <span class="nav__name">Home</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="myride.php" class="nav__link <?php if($_SERVER['REQUEST_URI'] == "/myride.php") { ?>active-link<?php }  ?>">
                        <i class='bx bx-bus nav__icon'></i>
                        <span class="nav__name">MyRide</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="contact.php" class="nav__link <?php if($_SERVER['REQUEST_URI'] == "/contact.php") { ?>active-link<?php }  ?>">
                        <i class='bx bx-conversation nav__icon'></i>
                        <span class="nav__name">Contact</span>
                    </a>
                </li>

                <li class="nav__item">
                    <a href="profile.php" class="nav__link <?php if($_SERVER['REQUEST_URI'] == "/profile.php") { ?>active-link<?php }  ?>">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Profile</span>
                    </a>
                </li>

            </ul>
        </div>

        <img src="assets/img/logo.png" alt="" class="nav__img">
    </nav>
</header>

<script src="assets/js/navbar.js"></script>