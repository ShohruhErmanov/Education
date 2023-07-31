@extends('layouts.site')
@section('content')

@include('sections.header')
@include('sections.about')
@include('sections.feature')
@include('sections.courses')
@include('sections.team')
@include('sections.testimonial')
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
