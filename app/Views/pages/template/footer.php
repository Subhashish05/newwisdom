<section class="footer_form container">
    <form action="/footer_enquiry" method="post" class="d-flex flex-wrap">
        <div class="col-12 col-md-4 text-md-start text-center">
            <h2 class="heading">Join us <br> and stay tuned!</h2>
            <button type="submit" class="btn btn-theme my-3">
                <i class="fa fa-right-long"></i>
                Join Us
            </button>
        </div>
        <div class="col-12 col-md-8 d-flex flex-wrap ps-md-5">
            <div class="col-12 mt-3 mt-md-0 col-md-4 px-2">
                <lable for="name" class="d-none">name</lable>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control">
            </div>
            <div class="col-12 mt-3 mt-md-0 col-md-4 px-2">
                <lable for="email" class="d-none">email</lable>
                <input type="text" name="email" id="email" placeholder="E-mail" class="form-control">
            </div>
            <div class="col-12 mt-3 mt-md-0 col-md-4 px-2">
                <lable for="number" class="d-none">number</lable>
                <input type="text" name="number" id="number" placeholder="Number" class="form-control">
            </div>
            <div class="col-12 mt-3 px-2">
                <lable for="message" class="d-none">message</lable>
                <textarea name="message" id="message" placeholder="Message" rows="2"
                    class="form-control"></textarea>
            </div>
        </div>
    </form>
</section>
<footer>
    <div class="d-flex flex-wrap border-bottom container">
        <!-- about -->
        <div class="col-md-3 col-12">
            <a href="#">
                <img src="<?php echo base_url('/assets/img/logo.png') ?>" alt="New Wisdom Academy" title="New Wisdom Academy" class="img-fluid">
            </a>
            <p class="card_desc">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet a velit praesentium tempora ipsa repellat dolores doloremque, nostrum rem facilis?
            </p>
        </div>
        <!-- contact details -->
        <div class="col-md-3 col-6 mt-3">
            <a href="tel:0123456789" class="ms-md-5 px-md-3 d-flex">
                <i class="contact_icon fa fa-phone"></i>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Call
                    </h5>
                    <div class="contact_details">
                        +91-0123456789
                    </div>
                </span>
            </a>
            <span class="ms-md-5 px-md-3 d-flex">
                <i class="contact_icon fa-regular fa-clock"></i>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Work Time
                    </h5>
                    <div class="contact_details">
                        Mon - Fir <br> 7:30am - 1:30pm
                    </div>
                </span>
            </span>
            <a href="#" class="ms-md-5 px-md-3 d-flex">
                <i class="contact_icon fa fa-location-dot"></i>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Address
                    </h5>
                    <div class="contact_details">
                        Ulda, Galudih
                    </div>
                </span>
            </a>
        </div>
        <!-- quick links -->
        <div class="col-md-3 col-6 mt-3">
            <div class="col-8 mx-auto">
                <h4 class="card_title">Quick Links</h4>
                <ul>
                    <li><a href="<?php echo base_url('about') ?>" class="card_desc">About Us</a></li>
                    <li><a href="<?php echo base_url('classes') ?>" class="card_desc">Our Classes</a></li>
                    <li><a href="<?php echo base_url('teachers') ?>" class="card_desc">School Teachers</a></li>
                    <li><a href="<?php echo base_url('event') ?>" class="card_desc">Recent Events</a></li>
                    <li><a href="<?php echo base_url('news') ?>" class="card_desc">Our News</a></li>
                    <li><a href="<?php echo base_url('schedule') ?>" class="card_desc">Schedule</a></li>
                </ul>
            </div>
        </div>
        <!-- google map -->
        <div class="col-md-3 col-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.5954984960745!2d86.40612090984092!3d22.6688654293513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f60350aa3c669f%3A0x173da1ba51ab8c26!2sNew%20Wisdom%20Academy!5e0!3m2!1sen!2sin!4v1739504675533!5m2!1sen!2sin"
                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="container footer_bottom">
        <p class="mb-0">
            &copy; Copyrights <?php echo date('Y') ?> New Wisdom Academy All rights reserved | Developed by <a href="https://portfolio-subhashish-99.netlify.app/" class="text-decoration-underline" target="_blank">Subhashish</a>
        </p>
        <div class="d-flex">
            <a href="#" title="facebook" class="social_media_logo">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" title="whatsapp" class="social_media_logo">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="#" title="instagram" class="social_media_logo">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>