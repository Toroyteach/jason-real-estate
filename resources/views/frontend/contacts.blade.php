@extends('layout.app')
@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="{{ asset("frontend/assets/img/page-header.jpg") }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>CONTACT US</h2>
                        <p>Businex always try to provide the best Business Solutions for Clinets
                            to grow up their Business very sharply and smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area ==-->

<!--== Start Contact Page Area Wrapper ==-->
<div class="contact-page-area-wrapper sp-y">
    <div class="container">
        <div class="contact-content-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-area contact-method">
                        <h3>Send us a Message</h3>

                        <div class="contact-form-wrap">
                            <form action="{{ route('contact.submit') }}" method="post" id="contact-form"
                                  id="contact-form">
                                  @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="first_name" placeholder="First Name *"
                                                       required/>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="last_name" placeholder="Last Name *" required/>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="email" name="email_address" placeholder="Email address *"
                                                       required/>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="phone_no" placeholder="Your Phone"/>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="single-input-item">
                                            <label for="con_message" class="sr-only m-0"></label>
                                            <textarea name="con_message" id="con_message" cols="30" rows="7"
                                                      placeholder="Message *" required></textarea>
                                        </div>

                                        <div class="single-input-item mb-0 mt-40">
                                            <button class="btn-outline">Send Message</button>
                                        </div>

                                        <div class="form-message"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-information contact-method">
                        <div class="contact-info-con">
                            <h3>Contact Info</h3>

                            <div class="widget-item m-0">
                                <address>
                                    2005 Stokes Isle Apartment. 896, Washington 10010, USA
                                    <br>
                                    https://example.com
                                    <br>
                                    hello@example.com
                                    <br>
                                    (+68) 120034509
                                </address>
                            </div>
                            <div class="member-social-icons mt-30">
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#"><i class="mdi mdi-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Contact Page Area Wrapper ==-->
<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);
    const action = form.getAttribute('action');

    fetch(action, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(res => {
        if (!res.ok) throw new Error();
        return res.json();
    })
    .then(data => {
        toast(data.message || 'Message sent');
        form.reset();
    })
    .catch(() => {
        toast('Something went wrong', true);
    });
});

function toast(msg, error = false) {
    const el = document.createElement('div');
    el.textContent = msg;
    el.style.position = 'fixed';
    el.style.bottom = '20px';
    el.style.right = '20px';
    el.style.padding = '12px 20px';
    el.style.color = '#fff';
    el.style.background = error ? '#dc3545' : '#28a745';
    el.style.borderRadius = '6px';
    el.style.boxShadow = '0 0 10px rgba(0,0,0,0.1)';
    el.style.zIndex = '9999';
    document.body.appendChild(el);
    setTimeout(() => el.remove(), 3000);
}
</script>
@endsection