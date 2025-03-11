<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .notice {
            background: #e4e4e4;
            padding: 15px;
            margin: 10px 0;
            border-radius: .5rem;
            overflow: hidden;
            border-left: 5px solid var(--highlight);
        }
        .notice h2 {
            color: #333;
            margin: 0 0 10px;
        }
        .notice p {
            margin: 0;
            color: #666;
        }
    </style>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <section class="hero_section">
            <h1 class="section_title">Notice Board</h1>
        </section>
    <section class="container mb-5">        
        <div class="notice">
            <h2>Upcoming Examination Schedule</h2>
            <p>Date: March 20, 2025</p>
            <p>All students are required to check their exam timetable.</p>
        </div>
        
        <div class="notice">
            <h2>School Reopening Notice</h2>
            <p>Date: April 10, 2025</p>
            <p>The school will reopen for the new academic session.</p>
        </div>
        
        <div class="notice">
            <h2>Holiday Announcement</h2>
            <p>Date: Holi Festival</p>
            <p>The academy will remain closed for Holi celebrations.</p>
        </div>
    </section>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>