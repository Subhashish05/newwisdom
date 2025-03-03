<header class="container position-relative">
    <div class="border-bottom top_bar">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('/assets/img/logo.png') ?>" alt="logo" title="New Wisdom Academy" class="header_logo">
        </a>
        <div class="d-none d-md-flex">
            <a href="tel:0123456789" class="ms-5 px-3 d-flex">
                <i class="contact_icon fa fa-phone"></i>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Call
                    </h5>
                    <div class="contact_details">
                        +91-0123456789
                    </div>
                </span>
            </a>
            <span class="ms-5 px-3 d-flex">
                <i class="contact_icon fa-regular fa-clock"></i>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Work Time
                    </h5>
                    <div class="contact_details">
                        Mon - Fir 7:30 am - 1:30 pm
                    </div>
                </span>
            </span>
            <a href="#" class="ms-5 px-3 d-flex">
                <i class="contact_icon fa fa-location-dot"></i>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Address
                    </h5>
                    <div class="contact_details">
                        Ulda, Galudih
                    </div>
                </span>
            </a>
        </div>
        <div class="d-md-none menu_btn" onclick="openMenu(this)">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
        </div>
    </div>
    <div class="menu">
        <nav>
            <a href="<?php echo base_url('/')?>" class="navigation <?php if ($page_name == 'home') echo 'active'?>">Home</a>
            <a href="<?php echo base_url('/about')?>" class="navigation <?php if ($page_name == 'about') echo 'active'?>">About</a>
            <a href="<?php echo base_url('/classes')?>" class="navigation <?php if ($page_name == 'classes') echo 'active'?>">Classes</a>
            <a href="<?php echo base_url('/teachers')?>" class="navigation <?php if ($page_name == 'teachers') echo 'active'?>">Teachers</a>
            <a href="<?php echo base_url('/notice')?>" class="navigation <?php if ($page_name == 'notice') echo 'active'?>">Notice</a>
            <a href="<?php echo base_url('/contact')?>" class="navigation <?php if ($page_name == 'contact') echo 'active'?>">Contact</a>
        </nav>
        <div class="d-flex">
            <a href="#" title="facebook" class="social_media_logo">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" title="whatsapp" class="social_media_logo">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="#" title="instagram" class="social_media_logo">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>
    <script>
        const menu = document.querySelector('.menu');
        function openMenu(e){
            if(e.classList[2] == 'active'){
                e.classList.remove('active');
                menu.classList.remove('active');
            }else{
                e.classList.add('active');
                menu.classList.add('active');
            }
        }
    </script>
</header>