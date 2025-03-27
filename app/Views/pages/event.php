<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
   
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .news_img {
            border-radius: .25rem;
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            object-position: center;
        }

        .news_img+.card_title {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.35rem;
            font-weight: 600;
        }

        @media (width < 768px) {
            .news_img {
                margin-top: 1rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <section class="container py-50 px-20">
            <div class="d-flex flex-wrap mt-3">
                <?php
                foreach ($allNews as $news) {
                    echo '
                            <div class="col-12 col-md-4 p-3" data-observe="fadeIn">
                                <div>
                                    <img data-src="' . base_url('/assets/img/' . $news['img']) . '" alt="News article" class="lazy news_img mb-2">
                                    <h3 class="card_title">' . $news['heading'] . '</h3>
                                    <p class="card_desc">' . $news['description'] . '</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="event_time">' . $news['date'] . '</p>
                                        <a href="/news/' . $news['title'] . '" class="text-highlight">Read More <i class="fa fa-arrow-right"></i></a>
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
</body>

</html>