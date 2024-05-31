@extends('layouts.main')

@section('content')
    @if ($profile)
        <a href="{{ route('profile.edit') }}" class="edit-button">
            Edit Profile
        </a>

        <section id="heading" class="pt-4 p-3 p-md-0" data-aos="fade-down" data-aos-duration="1500">
            <div class="container p-2 p-md-5">
                <div class="row">
                    <div class="heading">
                        <div class="row p-2 p-md-5">
                            <div class="col-md-6" data-aos="flip-up" data-aos-delay="500" data-aos-duration="1000">
                                <img src="{{ url('/') }}/storage/profile/{{ $profile->foto }}" class="w-100">
                            </div>
                            <div class="col-md-6 d-flex justify-content-center align-items-center" data-aos="fade-left"
                                data-aos-delay="500" data-aos-duration="1000">
                                <div class="nama">
                                    <h1 class="text-uppercase">{{ $profile->nama }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="biodata" class="mt-3">
            <div class="container">
                <h1 class="section-title" data-aos="fade-right" data-aos-duration="800">Background</h1>
                <div class="row">
                    <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="800">
                        <div class="box-wrapper box-wrapper-pink p-2 p-md-5">
                            <p>{{ $profile->background }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-duration="800">
                        <div class="box-wrapper box-wrapper-yellow p-2 p-md-4">
                            <h3>Contact</h3>
                            <a class="btn btn-blue mb-2"><i class="bi bi-telephone-fill"></i> +62 857-2644-5281</a><br>
                            <a class="btn btn-yellow mb-2"><i class="bi bi-envelope-fill"></i> annidarn@gmail.com</a><br>
                            <a class="btn btn-pink mb-2"><i class="bi bi-geo-alt-fill"></i> Malang City, East Java,
                                Indonesia</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="mt-3">
            <div class="container">
                <h1 class="section-title" data-aos="fade-right" data-aos-duration="800">Skills</h1>
                <div class="row">
                    <div class="col-md-12 mb-4" data-aos="fade-right" data-aos-duration="800">
                        <div class="box-wrapper box-wrapper-blue p-2 p-md-5">
                            <a class="btn btn-blue mb-2">Adobe Photoshop</a>
                            <a class="btn btn-yellow mb-2">Adobe Illustrator</a>
                            <a class="btn btn-pink mb-2">Adobe XD</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="mt-3">
            <div class="container">
                <h1 class="section-title" data-aos="fade-right" data-aos-duration="800">Projects</h1>
                <div class="row">
                    <div class="col-md-12 mb-4" data-aos="fade-right" data-aos-duration="800">
                        <div class="box-wrapper box-wrapper-pink p-2 p-md-5">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <h3>Copywriting &mdash; Perempuan Indonesia</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/perempuan-indonesia-1.png" class="w-100 mb-2">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/perempuan-indonesia-2.png" class="w-100 mb-2">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/perempuan-indonesia-3.png" class="w-100 mb-2">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/perempuan-indonesia-4.png" class="w-100 mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4" data-aos="fade-left" data-aos-duration="800">
                        <div class="box-wrapper box-wrapper-blue p-2 p-md-5">
                            <div class="row">
                                <div class="col-12 mb-2">
                                    <h3>Copywriting &mdash; HelloCation</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/hellocation-1.png" class="w-100 mb-2">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/hellocation-2.png" class="w-100 mb-2">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/hellocation-3.png" class="w-100 mb-2">
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <img src="img/hellocation-4.png" class="w-100 mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <div class="container p-3 p-md-5">
            <div class="row">
                <div class="col">
                    <h1>Profile Belum Ada.</h1>
                    <a href="{{ route('profile.edit') }}" class="btn btn-yellow">
                        Buat Profile
                    </a>
                </div>
            </div>
        </div>
    @endif
@endsection
