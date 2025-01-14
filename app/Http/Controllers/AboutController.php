<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'restaurant' => [
                'name' => "D'ENYA",
                'description' => "D'ENYA Restaurant adalah sebuah restoran dengan tema klasik elegan yang menawarkan suasana hangat dan mewah, memberikan pengalaman makan yang istimewa bagi setiap pelanggan. Dengan perpaduan desain interior klasik, furnitur antik, dan pencahayaan lembut, D'ENYA menciptakan suasana yang nyaman dan bernostalgia, cocok untuk keluarga, pasangan, maupun acara formal.",
            ],
            'vision_mission' => [
                'vision' => "Menjadi restoran pilihan utama yang menggabungkan cita rasa autentik dengan teknologi modern, memberikan pengalaman makan yang tak terlupakan bagi setiap pelanggan.",
                'mission' => [
                    "1. Menyajikan hidangan berkualitas tinggi dengan bahan-bahan segar dan pilihan terbaik.",
                    "2. Mengintegrasikan teknologi modern untuk mempermudah pelanggan dalam memesan dan menikmati layanan restoran.",
                    "3. Menghadirkan suasana yang nyaman dan ramah untuk keluarga, teman, dan komunitas.",
                    "4. Memberikan layanan pelanggan terbaik, memastikan kepuasan pelanggan di setiap kunjungan.",
                    "5. Mendukung produk lokal dengan bermitra dengan petani dan pemasok lokal untuk bahan masakan.",
                ],
            ],
            'uniqueness' => [
                'text' => "Keunikan resto D'ENYA adalah setiap meja dilengkapi dengan perangkat digital untuk memesan makanan secara langsung. Pelanggan dapat menikmati pengalaman modern tanpa perlu memanggil pelayan, membuat layanan lebih cepat dan efisien. ",
                'images' => [
                    'zendo_assets/images/unique1.jpg',
                    'zendo_assets/images/unique2.jpg',
                ],
            ],
            'team' => [
                [
                    'name' => 'Chef John Doe',
                    'position' => 'Head Chef',
                    'photo' => 'zendo_assets/images/chef_john.jpg',
                    'description' => 'Chef yang berpengalaman dan berkomitmen untuk memberikan pengalaman kuliner terbaik.',
                ],
                [
                    'name' => 'Jane Smith',
                    'position' => 'Sous Chef',
                    'photo' => 'zendo_assets/images/jane_smith.jpg',
                    'description' => 'Sous Chef yang ahli dalam mengolah hidangan utama yang menggugah selera.',
                ],
                [
                    'name' => 'Mark Lee',
                    'position' => 'Pastry Chef',
                    'photo' => 'zendo_assets/images/mark_lee.jpg',
                    'description' => 'Spesialis dalam menciptakan hidangan penutup yang manis dan lezat.',
                ],
                [
                    'name' => 'Sophia Brown',
                    'position' => 'Kitchen Assistant',
                    'photo' => 'zendo_assets/images/sophia_brown.jpg',
                    'description' => 'Membantu menjaga kelancaran operasi dapur dengan penuh dedikasi.',
                ],
                [
                    'name' => 'Liam Johnson',
                    'position' => 'Grill Specialist',
                    'photo' => 'zendo_assets/images/liam_johnson.jpg',
                    'description' => 'Ahli dalam memanggang hidangan dengan cita rasa yang luar biasa.',
                ],
                [
                    'name' => 'Olivia Davis',
                    'position' => 'Dishwasher',
                    'photo' => 'zendo_assets/images/olivia_davis.jpg',
                    'description' => 'Menjaga kebersihan dapur dan peralatan masak agar semuanya berjalan lancar.',
                ],
            ],
            'interior_photos' => [
                'zendo_assets/images/interior1.jpg',
                'zendo_assets/images/interior2.jpg',
                'zendo_assets/images/interior3.jpg',
            ],
            'testimonials' => [
                [
                    'customer' => 'Alice Brown',
                    'feedback' => "Makanannya lezat dan pelayanannya luar biasa!",
                    'photo' => 'zendo_assets/images/testimonial1.jpg',
                ],
                [
                    'customer' => 'Michael Green',
                    'feedback' => "Tempat yang indah dan suasana yang menyenangkan.",
                    'photo' => 'zendo_assets/images/testimonial2.jpg',
                ],
                [
                    'customer' => 'Emma White',
                    'feedback' => "Makanan enak, pelayanan ramah, dan suasana yang hangat.",
                    'photo' => 'zendo_assets/images/testimonial3.jpg',
                ],
                [
                    'customer' => 'John Black',
                    'feedback' => "Restoran terbaik yang pernah saya kunjungi. Sangat direkomendasikan!",
                    'photo' => 'zendo_assets/images/testimonial4.jpg',
                ],
                [
                    'customer' => 'Sophia Miller',
                    'feedback' => "Suasana yang menyenangkan dan makanannya sangat memuaskan.",
                    'photo' => 'zendo_assets/images/testimonial5.jpg',
                ],
                [
                    'customer' => 'David Wilson',
                    'feedback' => "Pelayanan cepat dan hidangannya luar biasa!",
                    'photo' => 'zendo_assets/images/testimonial6.jpg',
                ],
            ],
            'awards' => [
                [
                    'award' => 'Best Restaurant of the Year 2023',
                    'photo' => 'zendo_assets/images/award1.jpg',
                ],
                [
                    'award' => 'Top Dining Experience Award 2022',
                    'photo' => 'zendo_assets/images/award2.jpg',
                ],
                [
                    'award' => 'Customer Choice Award 2021',
                    'photo' => 'zendo_assets/images/award3.jpg',
                ],
            ],
        ];

        return view('about.index', $data);
    }
}
