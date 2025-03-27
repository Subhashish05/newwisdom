<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
   
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <section class="hero_section">
            <h1 class="section_title">Explore Our Classes</h1>
            <p class="section_desc">
                At New Wisdom Academy, we believe in providing a well-rounded and structured learning experience tailored to students of all levels. Our expertly designed courses focus on fostering academic excellence, personal growth, and practical skills to help students succeed in their educational journey.
            </p>
        </section>
        <section class="container">
            <h2 class="section_title fs-1 text-center">
                Why <span class="text-theme">Choose</span> New Wisdom Academy?
            </h2>
            <ul class="text-justify fs-5 mx-auto mb-5 col-md-9">
                <li class="card_title mt-3"><span class="text-success pe-2">✔</span><span class="fw-bold text-highlight">Experienced Faculty –</span> Highly qualified and dedicated teachers</li>
                <li class="card_title mt-3"><span class="text-success pe-2">✔</span><span class="fw-bold text-highlight">Structured Curriculum –</span> Aligned with national education standards</li>
                <li class="card_title mt-3"><span class="text-success pe-2">✔</span><span class="fw-bold text-highlight">Interactive Learning –</span> Smart classrooms, practice tests, and real-world applications</li>
                <li class="card_title mt-3"><span class="text-success pe-2">✔</span><span class="fw-bold text-highlight">Personalized Attention –</span> Small batch sizes for better engagement</li>
                <li class="card_title mt-3"><span class="text-success pe-2">✔</span><span class="fw-bold text-highlight">Affordable Fees –</span> Quality education at reasonable prices</li>
            </ul>            
            <div class="text-center">
                <button type="button" class="btn-theme banner_btn d-inline-block mb-5" onclick="openEnroll()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                    Enroll Today
                </button>
            </div>
            <div class="d-flex flex-wrap mb-5">
                <div class="col-12 col-md-6">
                    <img data-src="<?php echo base_url('/assets/img/primary_class.jpg') ?>" alt="" class="img-fluid h-100 lazy">
                </div>
                <div class="col-12 col-md-6 pt-3 px-3" style="background-color: #ffefee;">
                    <h2 class="card_title fs-2" style="color: #e77e79;">
                        Primary Classes (Grades 1-5)
                    </h2>
                    <p class="card_desc text-justify">
                        <strong class="fs-5">Building a Strong Foundation</strong> <br>
                        Our primary classes focus on developing fundamental skills in Mathematics, Science, English, and Social Studies. We believe in nurturing curiosity and creativity at an early age through a structured yet flexible curriculum. Our lessons are designed to strengthen reading, writing, and numerical abilities, laying a strong academic foundation.
                    </p>
                    <p class="card_desc text-justify">
                        We use interactive learning methods, including visual aids, hands-on activities, storytelling, and group discussions, to make learning engaging and enjoyable for young minds. Our approach helps students develop essential cognitive skills, logical reasoning, and problem-solving abilities while encouraging them to think independently. Additionally, we focus on moral values, discipline, and teamwork to foster a well-rounded educational experience.
                    </p>
                </div>
            </div>
            <div class="d-flex flex-wrap-reverse mb-5">
                <div class="col-12 col-md-6 pt-3 px-3" style="background-color: #e8f4ff;">
                    <h2 class="card_title fs-2" style="color: #005db3;">
                        Middle School Classes (Grades 6-8)
                    </h2>
                    <p class="card_desc text-justify">
                        <strong class="fs-5">Enhancing Knowledge & Critical Thinking</strong> <br>
                        At the middle school level, we focus on concept clarity and critical thinking across subjects like Mathematics, Science, English, Social Studies, and Computer Science. Our curriculum encourages students to ask questions, explore ideas, and develop problem-solving skills through interactive learning, discussions, and real-world applications. By emphasizing analytical thinking, we help students move beyond rote memorization to truly understand and apply knowledge.
                    </p>
                    <p class="card_desc text-justify">
                        We integrate technology and digital literacy, preparing students for the modern world with coding and computational thinking. Through projects, debates, and creative expression, we nurture independent thought, effective communication, and a lifelong love for learning.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <img data-src="<?php echo base_url('/assets/img/middle_class.jpg') ?>" alt="" class="img-fluid h-100 lazy">
                </div>
            </div>
            <div class="d-flex flex-wrap mb-5">
                <div class="col-12 col-md-6">
                    <img data-src="<?php echo base_url('/assets/img/high_class.jpg') ?>" alt="" class="img-fluid h-100 lazy">
                </div>
                <div class="col-12 col-md-6 pt-3 px-3" style="background-color: #ebfff7;">
                    <h2 class="card_title fs-2" style="color: #066d3f;">
                        High School Classes (Grades 9-10)
                    </h2>
                    <p class="card_desc text-justify">
                        <strong class="fs-5">Preparing for a Bright Future</strong> <br>
                        Our high school curriculum equips students with in-depth subject knowledge and essential skills to excel in board exams. We provide specialized coaching in Mathematics, Science, English, Social Studies, and Computer Science, ensuring they build a strong academic foundation and perform well in assessments through structured learning and expert guidance.
                    </p>
                    <p class="card_desc text-justify">
                        Beyond exams, we focus on critical thinking, problem-solving, and practical application of knowledge to prepare students for higher education and future careers. By fostering analytical skills and confidence, we help them navigate academic challenges successfully and develop a mindset for lifelong learning.
                    </p>
                </div>
            </div>
            <div class="d-flex flex-wrap-reverse mb-5">
                <div class="col-12 col-md-6 pt-3 px-3" style="background-color: #ebf2ff;">
                    <h2 class="card_title fs-2" style="color: #2f5691;">
                        Spoken English & Personality Development
                    </h2>
                    <p class="card_desc text-justify">
                        <strong class="fs-5">Master Communication & Confidence</strong><br>
                        Our Spoken English and Personality Development programs equip students with essential skills in public speaking, interview techniques, confidence-building, and leadership. Through interactive sessions, practical exercises, and real-world simulations, we help them articulate their thoughts clearly and effectively.
                    </p>
                    <p class="card_desc text-justify">
                        By fostering strong communication and self-assurance, we prepare students to excel in academic, professional, and social settings. Whether it's speaking fluently, expressing ideas persuasively, or leading with confidence, our training ensures they develop the skills needed to become future-ready individuals in a competitive world.
                    </p>
                </div>
                <div class="col-12 col-md-6">
                    <img data-src="<?php echo base_url('/assets/img/learn_eng.jpg') ?>" alt="" class="img-fluid h-100 lazy">
                </div>
            </div>
        </section>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>