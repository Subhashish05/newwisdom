<header class="container position-relative">
    <div class="border-bottom top_bar">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('/assets/img/logo.webp') ?>" alt="logo" title="New Wisdom Academy" class="header_logo">
        </a>
        <div class="d-none d-md-flex">
            <a href="tel:0123456789" class="ms-5 px-3 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="contact_icon">
                    <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Call
                    </h5>
                    <div class="contact_details">
                        +91-0123456789
                    </div>
                </span>
            </a>
            <span class="ms-5 px-3 d-flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="contact_icon">
                    <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z" />
                </svg>
                <span class="d-flex flex-column">
                    <h5 class="contact_type">
                        Work Time
                    </h5>
                    <div class="contact_details">
                        Mon - Fir 7:30 am - 1:30 pm
                    </div>
                </span>
            </span>
            <a href="#" class="ms-5 px-3 d-flex">
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
        <div class="d-md-none menu_btn" onclick="openMenu(this)">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
        </div>
    </div>
    <div class="menu">
        <nav>
            <a href="<?php echo base_url('/') ?>" class="navigation <?php if ($page_name == 'home') echo 'active' ?>">Home</a>
            <a href="<?php echo base_url('/about') ?>" class="navigation <?php if ($page_name == 'about') echo 'active' ?>">About</a>
            <a href="<?php echo base_url('/classes') ?>" class="navigation <?php if ($page_name == 'classes') echo 'active' ?>">Classes</a>
            <a href="<?php echo base_url('/teachers') ?>" class="navigation <?php if ($page_name == 'teachers') echo 'active' ?>">Teachers</a>
            <a href="<?php echo base_url('/notice') ?>" class="navigation <?php if ($page_name == 'notice') echo 'active' ?>">Notice</a>
            <a href="<?php echo base_url('/contact') ?>" class="navigation <?php if ($page_name == 'contact') echo 'active' ?>">Contact</a>
        </nav>
        <h4 class="text-center border-secondary border-top py-2 d-md-none">Follow Us:</h4>
        <div class="d-flex justify-content-around px-5 px-md-0 flex-wrap">
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
    <script>
        const menu = document.querySelector('.menu');

        function openMenu(e) {
            if (e.classList[2] == 'active') {
                e.classList.remove('active');
                menu.classList.remove('active');
            } else {
                e.classList.add('active');
                menu.classList.add('active');
            }
        }
    </script>
</header>
<div class="enrollment_form">
    <div class="position-fixed top-0 end-0 btn" onclick="closeEnroll()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" fill="#ff0000" height="24px">
            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
        </svg>
    </div>
    <h3 class="text-center mb-3 heading text-theme">School Enrollment Form</h3>
    <form action="/enrollment_form" method="post" enctype="multipart/form-data">
        <div class="mb-3 px-2 position-relative">
            <label for="name" class="enroll_form_label">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="parentName" class="enroll_form_label">Father's' Name</label>
            <input type="text" class="form-control" name="father_name" id="parentName" required>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="contactNumber" class="enroll_form_label">Contact Number</label>
            <input type="tel" class="form-control" name="number" id="contactNumber" required>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="email" class="enroll_form_label">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="d-flex flex-wrap">
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label for="dob" class="enroll_form_label">Date of Birth</label>
                <input type="date" class="form-control" name="DOB" id="dob" required>
            </div>
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label class="enroll_form_label">Gender</label>
                <select class="form-select" name="gender" required>
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                </select>
            </div>
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label class="enroll_form_label">Transport Required</label>
                <select class="form-select" name="transport" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label for="aadhar" class="enroll_form_label">Aadher Number</label>
                <input type="text" class="form-control" name="aadhar" id="aadhar" required>
            </div>
        </div>
        <div class="mb-2 px-2 position-relative">
            <label for="address" class="enroll_form_label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="1" required></textarea>
        </div>
        <div class="mb-2 form-check ms-3">
            <input type="checkbox" class="form-check-input" id="agreement" required>
            <label class="form-check-label text-secondary" for="agreement"><small>I agree to the school <a href="policy" target="_blank" class="text-decoration-underline">policies</a>.</small></label>
        </div>
        <div class="d-flex justify-content-around">
            <button type="submit" class="btn btn-success w-75">Submit</button>
        </div>
    </form>
    <script>
        const EnrollForm = document.querySelector('.enrollment_form');
        const openEnroll = () => {
            EnrollForm.classList.add('show')
        }
        const closeEnroll = () => {
            EnrollForm.classList.remove('show')
        }
    </script>
</div>