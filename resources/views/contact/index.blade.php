<x-guest-layout>

<!-- contact section -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
                <h1 class="heading">Contact Information</h1>
                <hr>
            </div>

            <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                <!-- Display Success Message if Any -->
                @if(Session::has('success'))
                    <div class="alert alert-secondary ml-4 mr-4">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <!-- Restaurant Info Section -->
                <div class="restaurant-info">
                    <h3>Contact Details</h3>
                    <ul>
                        <li><strong>Phone Number:</strong> 090-080-0760</li>
                        <li><strong>Email:</strong> denya@restaurant.com</li>
                    </ul>

                    <h3>Social Media</h3>
                    <div class="social-icons">
                        <a href="https://facebook.com/restaurant" target="_blank">Facebook</a>
                        <a href="https://twitter.com/restaurant" target="_blank">Twitter</a>
                        <a href="https://instagram.com/restaurant" target="_blank">Instagram</a>
                    </div>

                    <h3>Opening Hours</h3>
                    <ul>
                        <li><strong>Sunday:</strong> 10:30 AM - 10:00 PM</li>
                        <li><strong>Mon-Fri:</strong> 9:00 AM - 08:00 PM</li>
                        <li><strong>Saturday:</strong> 11.30 AM - 10.00 PM</li>
                    </ul>
                </div>

            </div>
            <div class="col-md-2 col-sm-1"></div>
        </div>
    </div>
</section>

</x-guest-layout>
