 <!-- Contact Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                    @foreach ($contacts as $contact)
                    <div class="d-flex align-items-center mb-5">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="{{ $contact->icon }} text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>{{ $contact->title }}</h4>
                            <p class="m-0">{{ $contact->text }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                    <h1 class="display-4">Send Us A Message</h1>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-6 form-group">
                                <input id="fname" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                            </div>
                            <div class="col-6 form-group">
                                <input id="email" type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="subject" type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                        </div>
                        <div class="form-group">
                            <textarea id="massege" class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary py-3 px-5" onclick="alicoder()" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
