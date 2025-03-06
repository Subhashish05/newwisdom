<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to New Wisdom Academy</title>
    <meta name="description" content="New Wisdom Academy is a laudable initiative by the ‘Aarna-Bilvani Educational Society’ to promote quality and modern education to children of our country, especially of Ghatsila, Galudih, Jamshedpur and adjoining areas.">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/slider.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css') ?>">
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <!-- banner -->
        <section class="position-relative">
            <h2 class="main_title">Wisdom</h2>
            <div class="main_banner container">
                <div class="mob_banner">
                    <img src=" " alt="mobile banner" data-src="<?php echo base_url('assets/img/home/mob_banner1.webp')?>" data-mob_banner_index="1" class="active">
                    <img src=" " alt="mobile banner" data-src="<?php echo base_url('assets/img/home/mob_banner2.webp')?>" data-mob_banner_index="2">
                    <img src=" " alt="mobile banner" data-src="<?php echo base_url('assets/img/home/mob_banner3.webp')?>" data-mob_banner_index="3">
                </div>
                <script>
                    let crt_bnr = 1;
                    let nxt_bnr = crt_bnr + 1;
                    const mob_banners = document.querySelectorAll('[data-mob_banner_index]');
                    function mob_banner(cb, nb){                        
                        let banner = document.querySelector(`[data-mob_banner_index="${cb}"]`)
                        let nxt_banner = document.querySelector(`[data-mob_banner_index="${nb}"]`)
                        if(banner.src == '<?php echo base_url() ?>') banner.src = banner.getAttribute('data-src');
                        if(nxt_banner.src == '<?php echo base_url() ?>') nxt_banner.src = nxt_banner.getAttribute('data-src');
                        mob_banners.forEach((e) => {e.classList.remove('active','next')});
                        banner.classList.add('active');
                        nxt_banner.classList.add('next');
                        return;
                    }
                    mob_banner(1, 2);
                    setInterval(() =>{
                        crt_bnr++;
                        if(crt_bnr > 3) crt_bnr = 1;
                        nxt_bnr = crt_bnr + 1;
                        if(nxt_bnr > 3) nxt_bnr = 1
                        mob_banner(crt_bnr, nxt_bnr);
                    },5000);
                </script>
                <div class="col-12 col-md-7" data-observe="leftIn">
                    <h2 class="main_banner_text">
                        Shaping Futures with <span>Excellence!</span>
                    </h2>
                    <p class="main_banner_desc">
                    Where wisdom meets excellence! At New Wisdom Academy, we nurture young minds with top-notch academics, smart classrooms, and modern facilities. With expert teachers and a student-focused approach, we shape bright futures. Enroll today and watch your child thrive!
                    </p>
                    <button type="button" class="btn-theme banner_btn d-inline mt-5" onclick="openEnroll()">
                        <i class="fa fa-right-long"></i>
                        Enroll Today
                    </button>
                </div>
                <div class="col-12 col-md-5 position-relative d-none d-md-inline" data-observe="zoomIn">
                    <div class="banner_element"></div>
                    <img src="<?php echo base_url('/assets/img/home/banner-img.png') ?>" alt="banner image">
                </div>
            </div>
        </section>
        <!-- about -->
        <section class="container py-50 px-20">
            <div class="text-center">
                <h2 class="section_title">Welcome to <span class="text-theme">New Wisdom</span></h2>
                <p class="section_desc">
                    A place where young minds grow, dreams soar, and excellence thrives! New Wisdom Academy, run by the Aarna-Bilvani Educational Society, follows the CBSE pattern, blending academics with real-world skills. With a spacious campus, modern sports facilities, and dedicated teachers, we ensure every child shines. Plus, our affordable transport makes quality education accessible to all!
                </p>
            </div>
            <div class="d-flex flex-wrap mt-5">
                <div class="col-12 col-md-3 p-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2">
                        <img src="<?php echo base_url('/assets/img/home/icon1.png') ?>" alt="icon" class="mb-3">
                        <h3 class="card_title">Smart Classrooms</h3>
                        <p class="card_desc"> Interactive and tech-enabled for an engaging learning environment.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2">
                        <img src="<?php echo base_url('/assets/img/home/icon2.png') ?>" alt="icon" class="mb-3">
                        <h3 class="card_title">Well Qualified Teachers</h3>
                        <p class="card_desc">Experienced educators dedicated to shaping bright futures.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2">
                        <img src="<?php echo base_url('/assets/img/home/icon3.png') ?>" alt="icon" class="mb-3">
                        <h3 class="card_title">Latest Teaching Method</h3>
                        <p class="card_desc">Innovative, student-centric approaches for effective learning.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2">
                        <img src="<?php echo base_url('/assets/img/home/icon4.png') ?>" alt="icon" class="mb-3">
                        <h3 class="card_title">Modern Infrastructure</h3>
                        <p class="card_desc">A well-equipped campus designed for comfort and excellence.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery -->
        <div class="gallery_preview">
            <div class="text-end col-12">
                <i class="fa fa-xmark gallery_close" onclick="close_preview()"></i>
            </div>
            <button type="button" onclick="get_prev_img(this)"><i class="fa fa-caret-left"></i></button>
            <div data-gallery="" class="flex-grow-1">
                
            </div>
            <button type="button" onclick="get_next_img(this)"><i class="fa fa-caret-right"></i></button>
            <div class="text-center col-12 text-white"><span data-current_img=""></span>/10</div>
        </div>
        <section class="container py-50 px-20">
            <div class="masonary">
                <div class="masonary_img1 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img1.webp') ?>" alt="Gallery Image" onclick="show_img(this, 1)">
                </div>
                <div class="masonary_img2 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img2.webp') ?>" alt="Gallery Image" onclick="show_img(this, 2)">
                </div>
                <div class="masonary_img3 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img3.webp') ?>" alt="Gallery Image" onclick="show_img(this, 3)">
                </div>
                <div class="masonary_img4 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img4.webp') ?>" alt="Gallery Image" onclick="show_img(this, 4)">
                </div>
                <div class="masonary_img5 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img5.webp') ?>" alt="Gallery Image" onclick="show_img(this, 5)">
                </div>
                <div class="masonary_img6 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img6.webp') ?>" alt="Gallery Image" onclick="show_img(this, 6)">
                </div>
                <div class="masonary_img7 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img7.webp') ?>" alt="Gallery Image" onclick="show_img(this, 7)">
                </div>
                <div class="masonary_img8 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img8.webp') ?>" alt="Gallery Image" onclick="show_img(this, 8)">
                </div>
                <div class="masonary_img9 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img9.webp') ?>" alt="Gallery Image" onclick="show_img(this, 9)">
                </div>
                <div class="masonary_img10 " data-observe="zoomIn">
                    <img src="<?php echo base_url('assets/img/gallery/img10.webp') ?>" alt="Gallery Image" onclick="show_img(this, 10)">
                </div>
            </div>
        </section>
        <script>
            let current_img_elem;
            let current_img_num;
            function show_img(e, n) {
                current_img_elem = e;
                current_img_num = n;
                document.querySelector('.gallery_preview').classList.add('show');
                document.querySelector('[data-current_img]').textContent = current_img_num;
                return document.querySelector('[data-gallery]').innerHTML = `<img src="${e.src}" alt="gallery preview">`;
            }
            function get_prev_img(e){
                show_img(current_img_elem.parentElement.previousElementSibling.children[0], (current_img_num-1));
                return;
            }
            function get_next_img(e){
                show_img(current_img_elem.parentElement.nextElementSibling.children[0], (current_img_num+1));
                return;
            }
            function close_preview(){
                return document.querySelector('.gallery_preview').classList.remove('show');
            }
        </script>
        <!-- events -->
        <section class="container py-50 px-20">
            <div class="col-12 col-md-9">
                <h2 class="section_title left_heading">Our Events</h2>
                <p class="section_desc mx-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro corrupti
                    alias obcaecati! Repudiandae nulla sequi, vero non, reiciendis expedita,</p>
            </div>
            <div class="d-flex flex-wrap">
                <!-- calender -->
                <div class="col-12 col-md-6 col-lg-5 my-4">
                    <table class="calender w-100 text-center ">
                        <thead>
                            <tr class="bg-theme text-white fw-bold">
                                <th colspan="7">
                                    <div class="d-inline-flex col-12 justify-content-between">
                                        <button type="button" class="btn text-white" onclick="getMonth('prev')"><i
                                                class="fa fa-caret-left"></i></button>
                                        <h4 data-month="" class="mt-2"></h4>
                                        <button type="button" class="btn text-white" onclick="getMonth('next')"><i
                                                class="fa fa-caret-right"></i></button>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="calender_cell">SUN</th>
                                <th class="calender_cell">MON</th>
                                <th class="calender_cell">TUS</th>
                                <th class="calender_cell">WEB</th>
                                <th class="calender_cell">THU</th>
                                <th class="calender_cell">FRI</th>
                                <th class="calender_cell">SAT</th>
                            </tr>
                        </thead>
                        <tbody data-calender="">
                            <tr>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                            </tr>
                            <tr>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                            </tr>
                            <tr>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                            </tr>
                            <tr>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                            </tr>
                            <tr>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                            </tr>
                            <tr>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                                <td class="text-white">00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- event list -->
                <div class="col-12 col-md-6 col-lg-7 ps-md-5">
                    <span data-events=""></span>
                    <div class="event_card" data-observe="leftIn">
                        <div class="event_time"><i class="text-theme fa-regular fa-calendar-days"></i> 01/01/2000 &nbsp;
                            09:30am to 12:30pm</div>
                        <h3 class="card_title fs-3">Name of the event</h3>
                        <p class="card_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore non,
                            deserunt consequatur amet ratione sequi!</p>
                    </div>
                    <div class="event_card" data-observe="leftIn">
                        <div class="event_time"><i class="text-theme fa-regular fa-calendar-days"></i> 01/01/2000 &nbsp;
                            09:30am to 12:30pm</div>
                        <h3 class="card_title fs-3">Name of the event</h3>
                        <p class="card_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore non,
                            deserunt consequatur amet ratione sequi!</p>
                    </div>
                    <div class="event_card" data-observe="leftIn">
                        <div class="event_time"><i class="text-theme fa-regular fa-calendar-days"></i> 01/01/2000 &nbsp;
                            09:30am to 12:30pm</div>
                        <h3 class="card_title fs-3">Name of the event</h3>
                        <p class="card_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore non,
                            deserunt consequatur amet ratione sequi!</p>
                    </div>
                </div>
                <div class="col-12 text-end">
                    <a href="/event" class="text-highlight">ALL EVETNS <i class="fa fa-arrow-right-long"></i> </a>
                </div>
            </div>
        </section>
        <!-- testimonials -->
        <section class="container py-50 px-20">
            <div class="text-center">
                <h2 class="section_title">Testimonial</h2>
                <p class="section_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro corrupti alias
                    obcaecati! Repudiandae nulla sequi, vero non, reiciendis expedita, doloremque laboriosam nostrum
                    saepe aperiam est!</p>
            </div>
            <div class="position-relative">
                <div class="slide_container">
                    <div class="slider" data-slider="" data-observe="zoomIn">
                        <div class="slides">
                            <p class="testimonial">Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros
                                tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis
                                ultrices sapien</p>
                            <h4 class="test_name">Jhon Doe</h4>
                            <span class="test_prof">Parent</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros
                                tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis
                                ultrices sapien</p>
                            <h4 class="test_name">Jhon Doe</h4>
                            <span class="test_prof">Parent</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros
                                tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis
                                ultrices sapien</p>
                            <h4 class="test_name">Jhon Doe</h4>
                            <span class="test_prof">Parent</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros
                                tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis
                                ultrices sapien</p>
                            <h4 class="test_name">Jhon Doe</h4>
                            <span class="test_prof">Parent</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros
                                tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis
                                ultrices sapien</p>
                            <h4 class="test_name">Jhon Doe</h4>
                            <span class="test_prof">Parent</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros
                                tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis
                                ultrices sapien</p>
                            <h4 class="test_name">Jhon Doe</h4>
                            <span class="test_prof">Parent</span>
                        </div>
                    </div>
                </div>
                <button type="button" data-prev="" onclick="slider_prev()"><img
                        src="<?php echo base_url('/assets/img/left.png') ?>" alt="previous" title="previous"></button>
                <button type="button" data-next="" onclick="slider_next()"><img
                        src="<?php echo base_url('/assets/img/right.png') ?>" alt="next" title="next"></button>
                <div data-pagination="">
                </div>
            </div>
        </section>
        <!-- news -->
        <section class="container py-50 px-20">
            <div class="col-12 col-md-8">
                <h2 class="section_title left_heading">News Article</h2>
                <p class="section_desc mx-0">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro corrupti
                    alias obcaecati! Repudiandae nulla sequi, vero non, reiciendis expedita,
                </p>
            </div>
            <div class="d-flex flex-wrap mt-3">
                <div class="col-12 col-md-4 p-3" data-observe="fadeIn">
                    <div>
                        <img src="<?php echo base_url('/assets/img/home/news.webp') ?>" alt="News article" class="news_img">
                        <p class="event_time">01/01/2000 <i class="fa fa-newspaper text-theme ms-3"></i> By:Times Now</p>
                        <h3 class="card_title">News Heading</h3>
                        <p class="card_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aliquam, voluptate nemo cumque placeat facere doloribus minima quo, illo dolore sint omnis harum, natus hic.</p>
                        <div class="text-end">
                            <a href="/news" class="text-highlight">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-3" data-observe="fadeIn">
                    <div>
                        <img src="<?php echo base_url('/assets/img/home/news_2.webp') ?>" alt="News article" class="news_img">
                        <p class="event_time">01/01/2000 <i class="fa fa-newspaper text-theme ms-3"></i> By:Times Now</p>
                        <h3 class="card_title">News Heading</h3>
                        <p class="card_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aliquam, voluptate nemo cumque placeat facere doloribus minima quo, illo dolore sint omnis harum, natus hic.</p>
                        <div class="text-end">
                            <a href="/news" class="text-highlight">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 p-3" data-observe="fadeIn">
                    <div>
                        <img src="<?php echo base_url('/assets/img/home/news_3.webp') ?>" alt="News article" class="news_img">
                        <p class="event_time">01/01/2000 <i class="fa fa-newspaper text-theme ms-3"></i> By:Times Now</p>
                        <h3 class="card_title">News Heading</h3>
                        <p class="card_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum aliquam, voluptate nemo cumque placeat facere doloribus minima quo, illo dolore sint omnis harum, natus hic.</p>
                        <div class="text-end">
                            <a href="/news" class="text-highlight">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/calender.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/slider.js') ?>"></script>
    <script>
        slider({
            numberofsliders: 1,
            margin: 20
        })
    </script>
</body>

</html>