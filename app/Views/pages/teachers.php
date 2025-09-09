<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Teachers</title>

    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">

    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .teacher-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .teacher-card {
            background-color: hsla(231, 100%, 96%, 1.00);
            padding: 15px;
            border-radius: 8px;
            box-shadow: inset 0px 2px 1px hsla(0, 0%, 100%, 0.4), 0px 2px 2px hsla(0, 0%, 0%, 0.1), 0px 6px 6px hsla(0, 0%, 0%, 0.2);
            text-align: center;
        }

        .teacher-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid hsla(0, 0%, 60%, 1.00);
        }

        .teacher-card h3 {
            font-size: 1.25rem;
            margin: 10px 0 5px;
            color: hsla(231, 75%, 31%, 1.00);
        }

        .teacher-card p {
            color: hsla(231, 75%, 70%, 1);
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
        <div class="text-center py-3">
            <button type="button" class="btn-theme banner_btn d-inline-block" onclick="openEnroll()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                </svg>
                Enroll Today
            </button>
        </div>
        <section class="container mb-5">
            <div class="teacher-grid">
                <?php
                foreach ($teachers as $teacher) {
                    echo '
                            <div class="teacher-card">
                                <img data-src="' . base_url('assets/img/teachers/' . $teacher->pic) . '" alt="Teacher image" title="' . $teacher->name . '" class="lazy">
                                <h3>' . $teacher->name . '</h3>
                                <p>' . $teacher->qualification . '</p>
                            </div>
                        ';
                }
                ?>
            </div>
        </section>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>