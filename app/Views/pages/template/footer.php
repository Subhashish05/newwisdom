<section class="footer_form container">
    <form action="/footer_enquiry" method="post" class="d-flex flex-wrap">
        <div class="col-12 col-md-4 text-md-start text-center">
            <h2 class="heading">Join us <br> and stay tuned!</h2>
            <button type="submit" class="btn btn-theme my-3">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z" />
                </svg>
                Join Us
            </button>
        </div>
        <div class="col-12 col-md-8 d-flex flex-wrap ps-md-5">
            <div class="col-12 mt-3 mt-md-0 col-md-4 px-2">
                <lable for="name" class="d-none">name</lable>
                <input type="text" name="name" id="name" placeholder="Name" class="form-control" pattern="[\w\d]{3,}" required autocomplete="true">
            </div>
            <div class="col-12 mt-3 mt-md-0 col-md-4 px-2">
                <lable for="email" class="d-none">email</lable>
                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required autocomplete="true">
            </div>
            <div class="col-12 mt-3 mt-md-0 col-md-4 px-2">
                <lable for="number" class="d-none">number</lable>
                <input type="text" name="number" id="number" placeholder="Number" class="form-control" pattern="[0-9]{10}" required autocomplete="true">
            </div>
            <div class="col-12 mt-3 px-2">
                <lable for="message" class="d-none">message</lable>
                <textarea name="message" id="message" placeholder="Message" rows="2"
                    class="form-control" required></textarea>
            </div>
        </div>
    </form>
</section>
<footer>
    <div class="d-flex flex-wrap border-bottom container">
        <!-- about -->
        <div class="col-md-3 col-12">
            <a href="#">
                <img data-src="<?php echo base_url('/assets/img/logo.webp') ?>" alt="New Wisdom Academy" title="New Wisdom Academy" class="img-fluid lazy">
            </a>
            <p class="card_desc">
                New Wisdom Academy offers quality education with a focus on holistic learning, experienced faculty, and student-centered teaching to help learners achieve academic excellence.
            </p>
        </div>
        <!-- contact details -->
        <div class="col-md-3 col-6 mt-3">
            <a href="tel:917022255417" class="ms-md-5 px-md-3 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="contact_icon">
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Call
                    </h5>
                    <div class="contact_details">
                        +91-7022255417
                    </div>
                </span>
            </a>
            <span class="ms-md-5 px-md-3 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="contact_icon">
                    <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                </svg>
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
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="contact_icon">
                    <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                </svg>
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
                    <li><a href="<?php echo base_url('about') ?>" class="card_desc">About</a></li>
                    <li><a href="<?php echo base_url('contact') ?>" class="card_desc">Contact</a></li>
                    <li><a href="<?php echo base_url('notice') ?>" class="card_desc">NoticeBoard</a></li>
                    <li><a href="<?php echo base_url('teachers') ?>" class="card_desc">Teachers</a></li>
                    <li><a href="<?php echo base_url('articles') ?>" class="card_desc">Articles</a></li>
                    <li><a href="<?php echo base_url('classes') ?>" class="card_desc">Classes</a></li>
                    <li><a href="<?php echo base_url('gallery') ?>" class="card_desc">Gallery</a></li>
                    <li><a href="<?php echo base_url('rules') ?>" class="card_desc">Our Rules</a></li>
                    <li><a href="<?php echo base_url('policy') ?>" class="card_desc">Policy</a></li>
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
    <div class="container footer_bottom px-2">
        <p class="mb-0 text-center">
            &copy; Copyrights <?php echo date('Y') ?> New Wisdom Academy All rights reserved | Developed by <a href="https://spfreelance.vercel.app/" class="text-decoration-underline" target="_blank">spfreelance</a>
        </p>
        <div class="d-flex">
            <a href="https://www.facebook.com/NewWisdomAcademy" title="facebook" class="social_media_logo" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
                </svg>
            </a>
            <a href="https://wa.link/gsbqw0" title="whatsapp" class="social_media_logo" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
            </a>
            <a href="#" title="instagram" class="social_media_logo" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
            </a>
        </div>
    </div>
</footer>