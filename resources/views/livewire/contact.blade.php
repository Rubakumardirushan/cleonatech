@section('title', 'Contact Us')

<section id="contact" class="contact section-bg">
    <div class="container">
        <div class="section-title">
            <h2>Contact Us</h2>
            <p>We are available 24/7 via WhatsApp or email. Let's discuss your needs and see how CLEONATECH can assist you.</p>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>1234 Innovation Drive, Silicon Valley, CA 94043</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>support@cleonatech.com<br>info@cleonatech.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 (800) 123-4567<br>+1 (800) 765-4321</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <form action="storemsg" method="post" role="form" class="php-email-form" id="contact-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit">Send Message</button>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-primary mt-3" id="msg">
                            {{ session('success') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>
