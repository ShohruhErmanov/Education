@extends('layouts.site')
@section('content')


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Contact</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contact</p>
            </div>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    @include('sections.contact')

@endsection
@section('js')

<script>
    function alicoder() {
        let fname = document.getElementById('fname').value;
        let email = document.getElementById('email').value;
        let massege = document.getElementById('massege').value;
        let subject = document.getElementById('subject').value;

        event.preventDefault();
        let telegram_bot_id = "5882833319:AAEelsOTYiFWN2V1UyyK2gM0WQDP1r43y44";
        let chat_id = 5537637723; // 1111 o'rniga Habar borishi kerak bo'lgan ChatID
        let message = ` Ismi: ${fname}; \n Email: ${email}; \n Subject: ${subject}; \n Massege: ${massege};`;
        let settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://api.telegram.org/bot" + telegram_bot_id + "/sendMessage",
            "method": "POST",
            "headers": {
                "Content-Type": "application/json",
                "cache-control": "no-cache"
            },
            "data": JSON.stringify({
                "chat_id": chat_id,
                "text": message
            })
        };
        $.ajax(settings).done(function(response) {
            //    alert('Xabaringiz uchun rahmat!');
            window.location.href = '';
        });
        document.getElementById('fname').value = '';
        document.getElementById('email').value = '';
        document.getElementById('subject').value = '';
        document.getElementById('massege').value = '';
        return false;
    };
</script>

@endsection
