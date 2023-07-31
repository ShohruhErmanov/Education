 <!-- About Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    @foreach ( $aboutimgs as  $aboutimg)
                    <img class="position-absolute w-100 h-100" src="/images/about/{{ $aboutimg->image }}" style="object-fit: cover;">
                    @endforeach

                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4">First Choice For Online Education Anywhere</h1>
                </div>
                <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                <div class="row pt-3 mx-0">
                    @foreach ($abouts as $about)
                    <div class="col-3 px-0">
                        <div class="{{ $about->bg }} text-center p-4">
                            <h1 class="text-white" data-toggle="counter-up">{{ $about->number }}</h1>
                            <h6 class="text-uppercase text-white">{{ $about->title }}<span class="d-block">{{ $about->span }}</span></h6>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
