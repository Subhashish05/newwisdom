<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice</title>
   
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .notice {
            background: #ecf7ff;
            padding: 1rem;
            margin-bottom: 2rem;
            border-radius: .5rem;
            overflow: hidden;
            border-left: .25rem solid var(--theme-color);
        }
        .notice h2 {
            color: var(--highlight);
            margin-bottom: .75rem;
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
        <?php
            foreach($notices as $notice){
                echo '
                    <div class="notice shadow">
                        <h2>'.$notice->title.'</h2>
                        <p>Date: '.($notice->date).'</p>
                        <p>'.$notice->context.'</p>
                    </div>
                ';
            }
        ?>
    </section>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>