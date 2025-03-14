<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main class="container">
        <h1 class="display-3 fw-bold"><?php echo $article['heading'];?></h1>
        <div>
            <img src="<?php echo base_url('/assets/img/'.$article['img']);?>" alt="<?php echo $article['title'];?>" class="img-fluid my-3" style="aspect-ratio: 16/9;">
        </div>
        <div class="description">
            <?php echo $article['body'];?>
        </div>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>