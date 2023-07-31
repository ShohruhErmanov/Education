  <!-- Feature Start -->
  <div class="container-fluid bg-image" style="margin: 90px 0;">
      <div class="container">
          <div class="row">
              <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                  <div class="section-title position-relative mb-4">
                      <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Why Choose Us?</h6>
                      <h1 class="display-4">Why You Should Start Learning with Us?</h1>
                  </div>
                  <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet
                      voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est.
                      Diam sanctus gubergren sit rebum clita amet.</p>
                  @foreach ($features as $feature)
                      <div class="d-flex mb-3">
                          <div class="btn-icon {{ $feature->bg }} mr-4">
                              <i class="{{ $feature->icon }} text-white"></i>
                          </div>
                          <div class="mt-n1">
                              <h4>{{ $feature->title }}</h4>
                              <p>{{ $feature->text }}</p>
                          </div>
                      </div>
                  @endforeach
              </div>
              <div class="col-lg-5" style="min-height: 500px;">
                  <div class="position-relative h-100">
                      @foreach ($featureimgs as $featureimg)
                          <img class="position-absolute w-100 h-100" src="/images/feature/{{ $featureimg->image }}" style="object-fit: cover;">
                      @endforeach

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Feature Start -->
