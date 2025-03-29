<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to New Wisdom Academy</title>
    <meta name="description" content="New Wisdom Academy is a laudable initiative by the ‘Aarna-Bilvani Educational Society’ to promote quality and modern education to children of our country, especially of Ghatsila, Galudih, Jamshedpur and adjoining areas.">

    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">

    <link rel="preload" href="<?php echo base_url('/assets/css/OpenSans-Regular.woff2') ?>" as="font" type="font/woff2">
    <link rel="preload" href="<?php echo base_url('/assets/css/Poppins-Regular.woff2') ?>" as="font" type="font/woff2">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/slider.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/slider.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/home.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/home.css') ?>">
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <!-- banner -->
        <section class="position-relative">
            <h2 class="main_title">Wisdom</h2>
            <div class="main_banner container">
                <div class="col-12 col-md-7">
                    <h2 class="main_banner_text">
                        Shaping Futures with <span>Wisdom</span> & <span>Excellence</span>
                    </h2>
                    <p class="main_banner_desc">
                        Where wisdom meets excellence! At New Wisdom Academy, we nurture young minds with top-notch academics, smart classrooms, and modern facilities. With expert teachers and a student-focused approach, we shape bright futures. Enroll today and watch your child thrive!
                    </p>
                    <button type="button" class="btn-theme banner_btn d-inline my-5" onclick="openEnroll()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                        </svg>
                        Enroll Today
                    </button>
                </div>
                <div class="col-12 col-md-5 position-relative d-none d-md-inline" data-observe="zoomIn">
                    <div class="banner_element"></div>
                    <img src="<?php echo base_url('/assets/img/home/banner-img.webp') ?>" alt="banner image">
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
                <div class="col-12 col-md-3 px-5 px-md-3 py-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2 h-100" style="background-color: #ffefe6;">
                        <img data-src="<?php echo base_url('/assets/img/home/icon1.png') ?>" alt="icon" class="mb-3 lazy">
                        <h3 class="card_title text-theme">Smart Classrooms</h3>
                        <p class="card_desc"> Interactive and tech-enabled for an engaging learning environment.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-5 px-md-3 py-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2 h-100" style="background-color: #eef7ff;">
                        <img data-src="<?php echo base_url('/assets/img/home/icon2.png') ?>" alt="icon" class="mb-3 lazy">
                        <h3 class="card_title text-highlight">Well Qualified Teachers</h3>
                        <p class="card_desc">Experienced educators dedicated to shaping bright futures.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-5 px-md-3 py-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2 h-100" style="background-color: #ffefe6;">
                        <img data-src="<?php echo base_url('/assets/img/home/icon3.png') ?>" alt="icon" class="mb-3 lazy">
                        <h3 class="card_title text-theme">Latest Teaching Method</h3>
                        <p class="card_desc">Innovative, student-centric approaches for effective learning.</p>
                    </div>
                </div>
                <div class="col-12 col-md-3 px-5 px-md-3 py-3" data-observe="fadeIn">
                    <div class="text-center shadow p-3 rounded-2 h-100" style="background-color: #eef7ff;">
                        <img data-src="<?php echo base_url('/assets/img/home/icon4.png') ?>" alt="icon" class="mb-3 lazy">
                        <h3 class="card_title text-highlight">Modern Infrastructure</h3>
                        <p class="card_desc">A well-equipped campus designed for comfort and excellence.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- gallery -->
        <section class="gallery_preview">
            <div class="text-end col-12 position-absolute" style="top: 1rem; right: 1rem">
                <button type="button" title="Close" onclick="close_preview()" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffffff" height="40px" class="gallery_close">
                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
            </div>
            <button type="button" onclick="get_prev_img(this)" title="Previous Image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="#ffffff" height="20px">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                </svg>
            </button>
            <div data-gallery="" class="flex-grow-1">
            </div>
            <button type="button" onclick="get_next_img(this)" title="Next Image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="#ffffff" height="20px">
                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg>
            </button>
            <div class="text-center col-12 text-white"><span data-current_img=""></span>/10</div>
        </section>
        <section class="container py-50 px-20">
            <div class="masonary">
                <div class="masonary_img1 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img1.webp') ?>" alt="Gallery Image" onclick="show_img(this, 1)" class="lazy">
                </div>
                <div class="masonary_img2 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img2.webp') ?>" alt="Gallery Image" onclick="show_img(this, 2)" class="lazy">
                </div>
                <div class="masonary_img3 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img3.webp') ?>" alt="Gallery Image" onclick="show_img(this, 3)" class="lazy">
                </div>
                <div class="masonary_img4 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img4.webp') ?>" alt="Gallery Image" onclick="show_img(this, 4)" class="lazy">
                </div>
                <div class="masonary_img5 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img5.webp') ?>" alt="Gallery Image" onclick="show_img(this, 5)" class="lazy">
                </div>
                <div class="masonary_img6 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img6.webp') ?>" alt="Gallery Image" onclick="show_img(this, 6)" class="lazy">
                </div>
                <div class="masonary_img7 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img7.webp') ?>" alt="Gallery Image" onclick="show_img(this, 7)" class="lazy">
                </div>
                <div class="masonary_img8 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img8.webp') ?>" alt="Gallery Image" onclick="show_img(this, 8)" class="lazy">
                </div>
                <div class="masonary_img9 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img9.webp') ?>" alt="Gallery Image" onclick="show_img(this, 9)" class="lazy">
                </div>
                <div class="masonary_img10 " data-observe="zoomIn">
                    <img data-src="<?php echo base_url('assets/img/gallery/img10.webp') ?>" alt="Gallery Image" onclick="show_img(this, 10)" class="lazy">
                </div>
            </div>
            <div class="text-end">
                <a href="/gallery" class="text-highlight">OUR GALLERY
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#135e9e" height="1.2rem">
                        <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                    </svg>
                </a>
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

            function get_prev_img(e) {
                show_img(current_img_elem.parentElement.previousElementSibling.children[0], (current_img_num - 1));
                return;
            }

            function get_next_img(e) {
                show_img(current_img_elem.parentElement.nextElementSibling.children[0], (current_img_num + 1));
                return;
            }

            function close_preview() {
                return document.querySelector('.gallery_preview').classList.remove('show');
            }
        </script>
        <!-- notice -->
        <section class="container py-50 px-20">
            <div class="col-12 col-md-9 mb-5">
                <h2 class="section_title left_heading">Latest <span class="text-theme">Notice</span> & Announcements</h2>
                <p class="section_desc mx-0">
                    Get the latest school notice and important announcements. Stay Updated with events, student activity, and academic highlights.
                </p>
            </div>
            <div class="d-flex flex-wrap">
                <!-- calender -->
                <div class="col-12 col-md-6 col-lg-5">
                    <table class="calender w-100 text-center ">
                        <thead>
                            <tr class="bg-theme text-white fw-bold">
                                <th colspan="7">
                                    <div class="d-inline-flex col-12 justify-content-between">
                                        <button type="button" class="btn text-white" onclick="getMonth('prev')" title="Previous Month">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="#ffffff" height="1rem">
                                                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                                            </svg>
                                        </button>
                                        <h4 data-month="" class="mt-2"></h4>
                                        <button type="button" class="btn text-white" onclick="getMonth('next')" title="Next Month">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="#ffffff" height="1rem">
                                                <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                                            </svg>
                                        </button>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="calender_cell bg-danger bg-opacity-25 text-danger">SUN</th>
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
                    <div data-events="" class="py-4 px-2 text-secondary"></div>
                </div>
                <!-- notice list -->
                <div class="col-12 col-md-6 col-lg-7 ps-md-5">
                    <div class="notice_card" data-observe="leftIn">
                        <div class="notice_time"><i class="text-theme fa-regular fa-calendar-days"></i> 14/01/2025 &nbsp;
                            Whole Day</div>
                        <h3 class="card_title fs-3">Happy Makar Sankranti</h3>
                        <p class="card_desc">Wishing all our students a joyful Makar Sankranti! May this festival bring happiness, success, and new opportunities. Enjoy the kites, sweets, and celebrations with your loved ones. Stay safe, stay blessed, and keep soaring high like the kites in the sky</p>
                    </div>
                    <div class="notice_card" data-observe="leftIn">
                        <div class="notice_time"><i class="text-theme fa-regular fa-calendar-days"></i> 26/01/2025 &nbsp;
                            07:30am to 12:30pm</div>
                        <h3 class="card_title fs-3">Happy Republic Day</h3>
                        <p class="card_desc">
                            Wishing all our students a proud and joyous Republic Day! Let’s honor the values of our Constitution and strive to be responsible citizens. May this day inspire you to contribute to the nation’s growth with dedication and integrity. Jai Hind
                        </p>
                    </div>
                    <div class="notice_card" data-observe="leftIn">
                        <div class="notice_time"><i class="text-theme fa-regular fa-calendar-days"></i> 02/02/2025 &nbsp;
                            07:30am to 12:30pm</div>
                        <h3 class="card_title fs-3">Happy Basant Panchami</h3>
                        <p class="card_desc">
                            Wishing all our students a joyful Basant Panchami! May Goddess Saraswati bless you with wisdom, knowledge, and success. Let this festival bring new energy, happiness, and inspiration to your learning journey. Stay blessed and keep shining bright
                        </p>
                    </div>
                </div>
                <div class="col-12 text-end">
                    <a href="/notice" class="text-highlight">NOTICE BOARD
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#135e9e" height="1.2rem">
                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                        </svg> </a>
                </div>
            </div>
        </section>
        <!-- testimonials -->
        <section class="container py-50 px-20">
            <div class="text-center mb-5">
                <h2 class="section_title"><span class="text-theme">Words</span> from Students & Parents</h2>
                <p class="section_desc">
                    Read what our students, parents, and teachers have to say about their experiences at our school. Their stories reflect our commitment to academic excellence, personal growth, and a nurturing learning environment.
                </p>
            </div>
            <div class="position-relative">
                <div class="slide_container">
                    <div class="slider" data-slider="" data-observe="zoomIn">
                        <div class="slides">
                            <p class="testimonial">
                                Our experience with this school has been wonderful. The teachers are dedicated, and the curriculum is well-structured. My son has grown academically and personally, thanks to the school's supportive environment. I appreciate the focus on values and overall development.
                            </p>
                            <h4 class="test_name">Rajesh Verma</h4>
                            <span class="test_prof">Parent of Class 8 Student</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">
                                I have been a student here for years, and it has been an amazing journey. The teachers are always encouraging, and the extracurricular activities help us explore our talents. The school has given me confidence and skills that will help me in the future.
                            </p>
                            <h4 class="test_name">Priya Sharma</h4>
                            <span class="test_prof">Class 10 Student</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">
                                Choosing this school for my daughter was the best decision. She enjoys learning and is excited about coming to school every day. The focus on academics, sports, and creativity ensures well-rounded development. The staff is approachable and always ready to help.
                            </p>
                            <h4 class="test_name">Sunita Gupta</h4>
                            <span class="test_prof">Parent of Class 5 Student</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">The school has played a crucial role in shaping my future. The teachers not only focus on studies but also guide us in career choices and personal growth. The learning environment is positive, and the facilities are excellent. I will always be grateful for my time here.</p>
                            <h4 class="test_name">Aniket Manna</h4>
                            <span class="test_prof">Class 10 Student</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">
                                As a teacher, I have seen this school nurture students into responsible and confident individuals. The emphasis on discipline, creativity, and learning makes it a great place to study and teach. The school values both academic excellence and character building, making it a perfect learning space.
                            </p>
                            <h4 class="test_name">Kavita Manjhi</h4>
                            <span class="test_prof">Teacher – 6 Years at the School</span>
                        </div>
                        <div class="slides">
                            <p class="testimonial">
                                This school provides the perfect balance of academics and extracurricular activities. My son has shown remarkable improvement in both confidence and knowledge. The teachers are caring and ensure that every child gets the attention they need. We are truly happy with our decision to enroll him here.
                            </p>
                            <h4 class="test_name">Arvind Singh</h4>
                            <span class="test_prof">Parent of Class 3 Student</span>
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
        <!-- article -->
        <section class="container py-50 px-20">
            <div class="col-12 col-md-8">
                <h2 class="section_title left_heading">Our <span class="text-theme">Articles</span></h2>
                <p class="section_desc mx-0">
                    Our school inaugurates events with enthusiasm, bringing students, teachers, and guests together to celebrate learning, achievements, and community spirit.
                </p>
            </div>
            <div class="d-flex flex-wrap mt-3">
                <?php
                foreach ($topArticle as $article) {
                    echo '
                            <div class="col-12 col-md-4 p-3" data-observe="fadeIn">
                                <div>
                                    <img data-src="' . base_url('/assets/img/' . $article['img']) . '" alt="Article Image" class="article_img mb-2 lazy">
                                    <h3 class="card_title">' . $article['heading'] . '</h3>
                                    <p class="card_desc">' . $article['description'] . '</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="event_time">' . $article['date'] . '</p>
                                        <a href="/article/' . $article['title'] . '" class="text-highlight">Read Article 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#135e9e" height="1rem"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ';
                }
                ?>
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