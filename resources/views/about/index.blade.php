<x-guest-layout>

    <head>
        <!-- Link ke file CSS -->
        <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    </head>
    <!-- Menu Section -->
    <section id="about" class="parallax-section">
        <div class="container">
            <h1>{{ $restaurant['name'] }}</h1>
            <p>{{ $restaurant['description'] }}</p>

            <!-- Visi dan Misi -->
            <h2>Visi dan Misi</h2>
            <h3>Visi</h3>
            <p>{{ $vision_mission['vision'] }}</p>
            <h3>Misi</h3>
            <ul>
                @foreach($vision_mission['mission'] as $mission)
                <li>{{ $mission }}</li>
                @endforeach
            </ul>

            <!-- Keunikan Restoran -->
            <h2>Keunikan Kami</h2>
            <p>{{ $uniqueness['text'] }}</p>
            <div class="images">
                <img src="{{ asset('zendo_assets/images/unique1.jpg') }}" alt="Keunikan 1" class="unique-photo">
                <img src="{{ asset('zendo_assets/images/unique2.jpg') }}" alt="Keunikan 2" class="unique-photo">
            </div>

            <!-- Tim Dapur -->
            <h2>Tim Dapur</h2>
            <div class="team">
                <div class="team-member">
                    <img src="{{ asset('zendo_assets/images/chef_john.jpg') }}" alt="Chef John Doe" class="team-photo">
                    <h4>Chef John Doe - Head Chef</h4>
                    <p>Chef yang berpengalaman dan berkomitmen untuk memberikan pengalaman kuliner terbaik.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('zendo_assets/images/jane_smith.jpg') }}" alt="Jane Smith" class="team-photo">
                    <h4>Jane Smith - Sous Chef</h4>
                    <p>Sous Chef yang ahli dalam mengolah hidangan utama yang menggugah selera.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('zendo_assets/images/mark_lee.jpg') }}" alt="Mark Lee" class="team-photo">
                    <h4>Mark Lee - Pastry Chef</h4>
                    <p>Spesialis dalam menciptakan hidangan penutup yang manis dan lezat.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('zendo_assets/images/sophia_brown.jpg') }}" alt="Sophia Brown" class="team-photo">
                    <h4>Sophia Brown - Kitchen Assistant</h4>
                    <p>Membantu menjaga kelancaran operasi dapur dengan penuh dedikasi.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('zendo_assets/images/liam_johnson.jpg') }}" alt="Liam Johnson" class="team-photo">
                    <h4>Liam Johnson - Grill Specialist</h4>
                    <p>Ahli dalam memanggang hidangan dengan cita rasa yang luar biasa.</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('zendo_assets/images/olivia_davis.jpg') }}" alt="Olivia Davis" class="team-photo">
                    <h4>Olivia Davis - Dishwasher</h4>
                    <p>Menjaga kebersihan dapur dan peralatan masak agar semuanya berjalan lancar.</p>
                </div>
            </div>

            <!-- Interior Restoran -->
            <h2>Interior Restoran</h2>
            <div class="interior">
                <img src="{{ asset('zendo_assets/images/interior1.jpg') }}" alt="Interior 1" class="interior-photo">
                <img src="{{ asset('zendo_assets/images/interior2.jpg') }}" alt="Interior 2" class="interior-photo">
                <img src="{{ asset('zendo_assets/images/interior3.jpg') }}" alt="Interior 3" class="interior-photo">
            </div>

            <!-- Testimoni Pelanggan -->
            <h2>Testimoni</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <img src="{{ asset('zendo_assets/images/testimonial1.jpg') }}" alt="Testimonial 1" class="testimonial-photo">
                    <p>"Makanannya lezat dan pelayanannya luar biasa!"</p>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('zendo_assets/images/testimonial2.jpg') }}" alt="Testimonial 2" class="testimonial-photo">
                    <p>"Tempat yang indah dan suasana yang menyenangkan."</p>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('zendo_assets/images/testimonial3.jpg') }}" alt="Testimonial 3" class="testimonial-photo">
                    <p>"Makanan enak, pelayanan ramah, dan suasana yang hangat."</p>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('zendo_assets/images/testimonial4.jpg') }}" alt="Testimonial 4" class="testimonial-photo">
                    <p>"Restoran terbaik yang pernah saya kunjungi. Sangat direkomendasikan!"</p>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('zendo_assets/images/testimonial5.jpg') }}" alt="Testimonial 5" class="testimonial-photo">
                    <p>"Suasana yang menyenangkan dan makanannya sangat memuaskan."</p>
                </div>
                <div class="testimonial">
                    <img src="{{ asset('zendo_assets/images/testimonial6.jpg') }}" alt="Testimonial 6" class="testimonial-photo">
                    <p>"Pelayanan cepat dan hidangannya luar biasa!"</p>
                </div>
            </div>

            <!-- Penghargaan -->
            <h2>Penghargaan</h2>
            <div class="awards">
                <div class="award">
                    <h4>Best Restaurant of the Year 2023</h4>
                    <img src="{{ asset('zendo_assets/images/award1.jpg') }}" alt="Award 1" class="award-photo">
                </div>
                <div class="award">
                    <h4>Top Dining Experience Award 2022</h4>
                    <img src="{{ asset('zendo_assets/images/award2.jpg') }}" alt="Award 2" class="award-photo">
                </div>
                <div class="award">
                    <h4>Customer Choice Award 2021</h4>
                    <img src="{{ asset('zendo_assets/images/award3.jpg') }}" alt="Award 3" class="award-photo">
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>