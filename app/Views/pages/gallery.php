<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Gallery</title>

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
            background-color: #000000dd;
            backdrop-filter: blur(5px);
            display: flex;
            align-content: space-between;
            flex-wrap: wrap;
        }

        @media (width <=360px) {
            .gallery_preview.show {
                padding: 1.5rem 0;
            }
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
            height: 2.5rem;
            width: 2.5rem;
            border: none;
            align-self: center;
        }

        div[data-gallery] {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 50px);
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

            .gallery_preview.show {
                padding: .25rem;
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                </svg>
                Enroll Today
            </button>
        </div>
        <section class="gallery_preview">
            <div class="text-end col-12 position-absolute" style="top: 1rem; right: 1rem">
                <button type="button" title="Close" onclick="close_preview()" class="btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ffffff" height="40px" class="gallery_close">
                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
            </div>
            <button type="button" onclick="get_prev_img(this)" title="Previous Image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="#ffffff" height="20px">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                </svg>
            </button>
            <div data-gallery="" class="flex-grow-1">
            </div>
            <button type="button" onclick="get_next_img(this)" title="Next Image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" fill="#ffffff" height="20px">
                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg>
            </button>
            <div class="text-center col-12 text-white"><span data-current_img=""></span>/10</div>
        </section>
        <section class="container d-flex flex-wrap my-5">
            <?php
            $i = 1;
            foreach ($images as $image) {
                echo '
                    <div class="col-6 col-md-3 p-3">
                        <div class="d-flex align-items-center justify-content-center bg-white h-100 rounded-2 shadow">
                            <img data-src="' . base_url('assets/img/gallery/' . $image->path) . '" alt="gallery" class="img-fluid rounded-2 lazy" onclick="show_img(this, ' . $i . ')">
                        </div>
                    </div>
                ';
                $i++;
            }
            ?>
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