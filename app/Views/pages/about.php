<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .mission_para {
            color: var(--desc-color);
            font-size: 1.05rem;
            line-height: 1.5;
            text-align: justify;
        }

        .mission_para::first-letter {
            color: var(--highlight);
            font-size: 5rem;
            line-height: 3rem;
            margin-right: 0.5rem;
            font-family: 'Times New Roman', Times, serif;
            float: left;
        }

        .section_desc2 {
            font-size: 1.05rem;
            max-width: 100%;
            text-align: justify;
        }

        @media (width <=480px) {

            .mission_para,
            .section_desc2 {
                font-size: .85rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <section class="hero_section">
            <h1 class="section_title">About New Wisdom Academy</h1>
            <p class="section_desc">
                Established under the aegis of the Aarna-Bilvani Educational Society, New Wisdom Academy in Ulda, Galudih, has been dedicated to providing quality education since its inception. Now in its fifth session, the academy has grown into a reputable institution committed to nurturing the future of our children.
            </p>
        </section>
        <div class="container">
            <div>
                <h2 class="text-center section_title mb-3 mt-5">
                    Our <span class="text-theme">Mission</span>
                </h2>
                <p class="mission_para clear-fix">
                    At New Wisdom Academy, our mission is to provide a well-rounded education that nurtures intellectual curiosity, critical thinking, and a passion for lifelong learning. We believe that every child has the potential to achieve greatness, and our role is to create an environment that supports their academic, emotional, and personal growth.
                    <img data-src="<?php echo base_url('assets/img/about/mission_banner.webp') ?>" alt="school image" class="lazy col-12 col-md-5 px-3 pt-2 float-end clearfix">
                    Our curriculum is designed to blend strong academic foundations with practical knowledge, fostering a culture of innovation, leadership, and creativity. Beyond textbooks and traditional learning, we emphasize experiential learning, allowing students to engage in real-world applications of their studies.
                    In today’s fast-evolving world, education is more than just scoring good marks. We equip our students with 21st-century skills, including problem-solving, communication, teamwork, and adaptability. We integrate technology into our teaching methodologies, ensuring that our students are not just learners but also future leaders in their respective fields.
                    Moreover, we believe in a value-based education system, where students develop a strong sense of ethics, responsibility, and discipline. Through regular personality development programs, social awareness activities, and leadership training, we ensure that our students grow up to be responsible global citizens.
                    At New Wisdom Academy, we are committed to creating a nurturing and stimulating environment where children feel safe, encouraged, and inspired to chase their dreams. Our goal is not just to educate but to empower young minds to shape a better future for themselves and society.
                </p>
            </div>
            <div class="d-flex flex-wrap">
                <h2 class="text-center section_title mb-3 mt-5 col-12">
                    Why <span class="text-theme">Choose Us</span>?
                </h2>
                <div class="col-12 col-md-6">
                    <ul class="section_desc2">
                        <li class="mb-3 lh-sm"><b class="text-highlight">Highly Qualified & Dedicated Teachers:</b> Our experienced mentors inspire and guide students towards academic success and personal growth.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Innovative & Creative Learning Methods:</b> We incorporate practical lessons, hands-on experiments, and real-world applications for better understanding.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Active & Experiential Learning:</b> Outdoor learning, group discussions, and scientific experiments make education interactive.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Best-In-Class Infrastructure & Facilities:</b> Modern classrooms, libraries, labs, and activity spaces ensure a comprehensive learning environment.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Safe, Green & Peaceful Campus:</b> Our pollution-free location provides a serene atmosphere that enhances learning and well-being.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Comprehensive Sports & Fitness Training:</b> We offer both indoor and outdoor sports with expert coaching.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Personalized Attention & Small Class Sizes:</b> Individual guidance ensures that each student gets the support they need.</li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 px-3">
                    <img data-src="<?php echo base_url('assets/img/about/why_choose.webp') ?>" alt="why choose us" class="lazy img-fluid">
                </div>
            </div>            
            <div class="text-center py-3">
                <button type="button" class="btn-theme banner_btn d-inline-block" onclick="openEnroll()">
                    <i class="fa fa-right-long"></i>
                    Enroll Today
                </button>
            </div>
            <div class="d-flex flex-wrap">
                <h2 class="text-center section_title mb-3 mt-5 col-12">
                    Our <span class="text-theme">Activities</span>
                </h2>
                <div class="col-12 col-md-6 px-3 mb-3">
                    <img data-src="<?php echo base_url('assets/img/about/our_activity.webp') ?>" alt="our activites" class="lazy img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <ul class="section_desc2">
                        <li class="mb-3 lh-sm"><b class="text-highlight">Transport Service:</b> We provide reasonably priced transportation to reach every corner, ensuring education is accessible to all.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Sports Training:</b> Following the CBSE pattern, we offer both indoor and outdoor sports facilities with expert trainers to encourage competitiveness.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Music Training:</b> Recognizing unique talents, we provide training in classical and western dance and music forms for holistic development.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Outing Service:</b> We organize educational tours to museums and scientific parks, turning theoretical learning into live experiences.</li>
                        <li class="mb-3 lh-sm"><b class="text-highlight">Language Courses:</b> Focusing on English communication skills, we prepare students for interviews, seminars, and standing out in the crowd.</li>
                    </ul>
                </div>
                <p class="my-5 text-center fw-bold heading section_desc">
                    At New Wisdom Academy, we believe in nurturing each child's potential, providing them with the tools and opportunities to thrive in an ever-evolving world.
                </p>
            </div>
        </div>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>