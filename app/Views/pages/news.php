<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper</title>
   
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="preload" href="<?php echo base_url('/assets/css/style.css') ?>" as="style">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        body {
            background-color: rgb(253, 238, 219);
        }

        article, aside{
            width: 100%;
        }
        .headline {
            font-family: 'Times New Roman', Times, serif;
            font-size: 2.5rem;
        }
        @media (width > 480px) {
            article {
                width: calc(100% - 280px);
            }

            aside {
                width: 280px;
                padding: 0 20px;
                position: sticky;
                bottom: 20px;
                align-self: flex-end;
            }
            .headline {
                font-size: 3.5rem;
            }
        }

        h2,
        h3 {
            font-family: 'Times New Roman', Times, serif;
        }

        p {
            font-family: 'Helvetica';
            color: #525252;
        }

        ul {
            margin-bottom: 1rem;
        }

        .news_img {
            border-radius: .25rem;
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            object-position: center;
        }

        .news.card_title {
            font-family: 'Times New Roman', Times, serif;
            font-size: .75rem;
            font-weight: 600;
        }
        .event_time{
            font-size: .75rem;
            margin-bottom: 0;
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
    <main class="container mt-5">
        <section class="d-flex flex-wrap">
            <article class="newspaper">
                <h1 class="headline"><?php echo $article['heading']; ?></h1>
                <div>
                    <img src="<?php echo base_url('/assets/img/' . $article['img']); ?>" alt="<?php echo $article['title']; ?>" class="img-fluid my-3" style="aspect-ratio: 16/9;">
                </div>
                <div class="content">
                    <?php echo $article['body']; ?>
                </div>
            </article>
            <aside>
                <h2 class="text-center">Latest News</h2>
                <?php
                foreach ($topNews as $news) {
                    echo '
                            <div class="pb-3">
                                <a href="/news/' . $news['title'] . '">
                                    <img src="' . base_url('/assets/img/' . $news['img']) . '" alt="News article" class="news_img mb-2">
                                    <h3 class="news card_title">' . $news['heading'] . '</h3>
                                </a>
                            </div>
                        ';
                }
                ?>
            </aside>
        </section>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>