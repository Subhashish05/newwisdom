<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Gallery</title>
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
        .gallery_preview {
            display: none;
        }

        .gallery_preview.show {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 15;
            width: 100vw;
            height: 100vh;
            padding: 1.5rem;
            background-color: #00000090;
            backdrop-filter: blur(5px);
            display: flex;
            align-content: space-between;
            flex-wrap: wrap;
        }

        .gallery_close,
        .gallery_preview>button {
            cursor: pointer;
            font-size: 1.5rem;
            line-height: 1;
            border-radius: 5rem;
            padding: .5rem .7rem;
            color: #fff;
            background-color: var(--highlight);
        }

        .gallery_preview>div {
            height: 2.5rem;
        }

        .gallery_preview>button {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2rem;
            border: none;
            align-self: center;
        }

        div[data-gallery] {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 5.5rem);
        }

        [data-gallery]>img {
            max-width: 80%;
            height: auto;
            max-height: 100%;
        }

        @media (width < 768px) {
            div[data-gallery] {
                height: calc(100vh - 10rem);
                width: 75%;
            }
        }
    </style>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <section class="hero_section">
            <h1 class="section_title">Moments Captured Perfectly</h1>
        </section>
        <div class="text-center py-3">
            <button type="button" class="btn-theme banner_btn d-inline-block" onclick="openEnroll()">
                <i class="fa fa-right-long"></i>
                Enroll Today
            </button>
        </div>
        <section class="container d-flex flex-wrap my-5">
            <?php
            $i = 1;
            foreach ($images as $image) {
                echo '
                    <div class="col-6 col-md-3 p-3">
                        <div class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-25 h-100 rounded-2 overflow-hidden">
                            <img data-src="' . base_url('assets/img/gallery/' . $image->path) . '" alt="gallery" class="img-fluid lazy" onclick="show_img(this, ' . $i . ')">
                        </div>
                    </div>
                ';
                $i++;
            }
            ?>
        </section>
        <section class="gallery_preview">
            <div class="text-end col-12">
                <i class="fa fa-xmark gallery_close" onclick="close_preview()"></i>
            </div>
            <button type="button" onclick="get_prev_img(this)"><i class="fa fa-caret-left"></i></button>
            <div data-gallery="" class="flex-grow-1">
            </div>
            <button type="button" onclick="get_next_img(this)"><i class="fa fa-caret-right"></i></button>
            <div class="text-center col-12 fw-bold text-white"><span data-current_img=""></span>/<?php echo $i - 1 ?></div>
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
                show_img(current_img_elem.parentElement.parentElement.previousElementSibling.children[0].children[0], (current_img_num - 1));
                return;
            }

            function get_next_img(e) {
                show_img(current_img_elem.parentElement.parentElement.nextElementSibling.children[0].children[0], (current_img_num + 1));
                return;
            }

            function close_preview() {
                return document.querySelector('.gallery_preview').classList.remove('show');
            }
        </script>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>