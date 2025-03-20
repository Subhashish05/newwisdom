<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="<?php echo base_url('/assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap-grid.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css') ?>">
    <style>
        .main {
            padding: 20px;
            background: #fff;
            margin-top: 20px;
        }
        .main h1 {
            text-align: center;
            color: #333;
        }
        .contact-info {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .contact-info div {
            flex-basis: 30%;
            background: #b6e6ad;
            padding: 20px;
            border-radius: 8px;
        }
        .contact-info h2 {
            text-align: center;
            color: #333;
        }
        .contact-info p {
            text-align: center;
            color: var(--desc-color);
        }
        .contact-form {
            background: #b6e6ad;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .contact-form label {
            display: block;
            color: rgba(51, 51, 51, 0.86);
            font-style: italic;
            padding-left: .5rem;
            margin: 10px 0 5px;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            background-color: #ffffff70;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }
        .contact-form button {
            display: block;
            width: 100%;
            padding: 10px;
            background: var(--highlight);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .contact-form button:hover {
            background: var(--theme-color);
        }
    </style>
</head>

<body>
    <?php include 'template/header.php'; ?>
    <main>
        <section class="hero_section">
            <h1 class="section_title">Contact Us</h1>
        </section>
        <div class="container main mb-5">
            <div class="contact-info">
                <div>
                    <h2>Address</h2>
                    <p>Galudih Barrage, Ulda, Jharkhand 832304, India</p>
                </div>
                <div>
                    <h2>Phone</h2>
                    <p><a href="tel:+917022255417">+91-70222 55417</a></p>
                </div>
                <div>
                    <h2>Email</h2>
                    <p><a href="mailto:info.wisdomacademy@gmail.com">info.wisdomacademy@gmail.com</a></p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-12 col-md-6 px-3">
                    <img src="<?php echo base_url('assets/img/contact.jpg') ?>" alt="" class="img-fluid">
                </div>
                <div class="contact-form col-12 col-md-6 mx-auto">
                    <h2 class="heading text-center">Contact Form</h2>
                    <form action="mailto:info.wisdomacademy@gmail.com" method="post" enctype="text/plain">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>    
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                        <label for="number">Number:</label>
                        <input type="text" id="number" name="number" required>    
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="1" required></textarea>    
                        <button type="submit">Send Us a Message</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include 'template/footer.php'; ?>
    <script src="<?php echo base_url('/assets/js/script.js') ?>"></script>
</body>

</html>