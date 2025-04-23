<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Articles</title>
   
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .article_img {
            border-radius: .25rem;
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            object-position: center;
        }

        .article_img+.card_title {
            font-family: 'Times New Roman', Times, serif;
            font-size: 1.35rem;
            font-weight: 600;
        }
        .event_time{
            margin-bottom: 0;
        }
        @media (width < 768px) {
            .article_img {
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
                foreach ($allArticle as $article) {
                    echo '
                            <div class="col-12 col-md-4 p-3" data-observe="fadeIn">
                                <div>
                                    <img data-src="' . base_url('/assets/img/' . $article['img']) . '" alt="article image" class="lazy article_img mb-2">
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
</body>

</html>