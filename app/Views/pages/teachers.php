<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Teachers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .teacher-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .teacher-card {
            background: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .teacher-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ddd;
        }
        .teacher-card h3 {
            font-size: 1.25rem;
            margin: 10px 0 5px;
            color: #333;
        }
        .teacher-card p {
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
    <section class="hero_section">
        <h1 class="section_title">Meet Our Teachers</h1>
        <p class="section_desc">Our dedicated and experienced teachers are committed to providing quality education and guidance to our students.</p>
    </section>
    <div class="container mb-5">
        <div class="teacher-grid">
            <div class="teacher-card">
                <img src="<?php echo base_url('assets/img/teachers/teacher1.png') ?>" alt="Teacher 1">
                <h3>Mr. Rahul Sharma</h3>
                <p>Mathematics Teacher</p>
            </div>
            <div class="teacher-card">
                <img src="<?php echo base_url('assets/img/teachers/teacher2.png') ?>" alt="Teacher 2">
                <h3>Mrs. Priya Singh</h3>
                <p>Science Teacher</p>
            </div>
            <div class="teacher-card">
                <img src="<?php echo base_url('assets/img/teachers/teacher1.png') ?>" alt="Teacher 3">
                <h3>Ms. Anjali Verma</h3>
                <p>English Teacher</p>
            </div>
            <div class="teacher-card">
                <img src="<?php echo base_url('assets/img/teachers/teacher2.png') ?>" alt="Teacher 4">
                <h3>Mrs. Rekha Gupta</h3>
                <p>Social Studies Teacher</p>
            </div>
        </div>
    </div>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>