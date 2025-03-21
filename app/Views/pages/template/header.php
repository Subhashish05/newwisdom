<header class="container position-relative">
    <div class="border-bottom top_bar">
        <a href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('/assets/img/logo.png') ?>" alt="logo" title="New Wisdom Academy" class="header_logo">
        </a>
        <div class="d-none d-md-flex">
            <a href="tel:0123456789" class="ms-5 px-3 d-flex">
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
            <span class="ms-5 px-3 d-flex">
                <i class="contact_icon fa-regular fa-clock"></i>
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
        <i class="fa fa-xmark fs-4"></i>
    </div>
    <h3 class="text-center mb-3 heading text-theme">School Enrollment Form</h3>
    <form action="/enrollment-form" method="post" enctype="multipart/form-data">
        <div class="mb-3 px-2 position-relative">
            <label for="name" class="enroll_form_label">Full Name</label>
            <input type="text" class="form-control" id="name" required>
        </div>
        <div class="d-flex flex-wrap">
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label for="dob" class="enroll_form_label">Date of Birth</label>
                <input type="date" class="form-control" id="dob" required>
            </div>
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label class="enroll_form_label">Gender</label>
                <select class="form-select" required>
                    <option value="Boy">Boy</option>
                    <option value="Girl">Girl</option>
                </select>
            </div>
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label class="enroll_form_label">Transport Required</label>
                <select class="form-select" required>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="mb-3 col-md-6 col-12 px-2 position-relative">
                <label for="reportCard" class="enroll_form_label">Previous Report Card</label>
                <input type="file" class="form-control d-none" id="reportCard" required>
                <button type="button" class="text-start border rounded-1 w-100 btn" onclick="document.querySelector('#reportCard').click()">
                    <img src="<?php echo base_url('assets/img/file.png')?>" alt="file" class="img-fluid" style="height: 1.5rem">
                    Upload
                </button>
            </div>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="aadhaar" class="enroll_form_label">Aadhaar Number</label>
            <input type="text" class="form-control" id="aadhaar" required>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="parentName" class="enroll_form_label">Parent Name</label>
            <input type="text" class="form-control" id="parentName" required>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="contactNumber" class="enroll_form_label">Contact Number</label>
            <input type="tel" class="form-control" id="contactNumber" required>
        </div>
        <div class="mb-3 px-2 position-relative">
            <label for="email" class="enroll_form_label">E-mail</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-2 px-2 position-relative">
            <label for="address" class="enroll_form_label">Address</label>
            <textarea class="form-control" id="address" rows="1" required></textarea>
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
        const openEnroll = () => {EnrollForm.classList.add('show')}
        const closeEnroll = () => {EnrollForm.classList.remove('show')}
    </script>
</div>