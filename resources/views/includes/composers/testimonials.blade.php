@foreach($testimonials as $testimonial)
    <li class="testimonial">
        <p class="description">
            {{ $testimonial->message }}
        </p>
        <div class="image">
            <img src="{{ asset($testimonial->image) }}" alt="">
        </div>
        <div class="info">
            <p class="name">{{ $testimonial->name }}</p>
            <p class="position">{{ $testimonial->message}}</p>
        </div>
    </li><!-- End 1st Slide Item -->
@endforeach