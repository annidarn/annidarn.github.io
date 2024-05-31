@extends('layouts.main')

@section('content')
    <div class="container p-2 p-md-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-3">
                <h1>{{ $profile ? 'Update Profile' : 'Create Profile' }}</h1>
            </div>

            @if ($profile)
            <div class="col-md-12 mb-2">
                <div class="row justify-content-center">
                    <div class="col-md-2" data-aos="flip-up" data-aos-delay="500" data-aos-duration="1000">
                        <img src="{{ url('/') }}/storage/profile/{{ $profile->foto }}" class="w-100 img-thumbnail">
                    </div>
                </div>
            </div>
            @endif

            <div class="col-md-10 box-wrapper box-wrapper-pink p-md-5 p-2">
                <form method="POST"
                    action="{{ $profile ? route('profile.update', $profile->id) : route('profile.store') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="nama" class="col-md-3 mb-3 col-form-label text-md-right">Name</label>
                        <div class="col-md-9 mb-3">
                            <input id="nama" type="text" class="form-control" name="nama"
                                value="{{ $profile ? $profile->nama : '' }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="foto" class="col-md-3 mb-3 col-form-label text-md-right">Profile Image</label>
                        <div class="col-md-9 mb-3">
                            <input id="foto" type="file" class="form-control" name="foto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="background" class="col-md-3 mb-3 col-form-label text-md-right">Background</label>
                        <div class="col-md-9 mb-3">
                            <textarea id="background" class="form-control" name="background" required>{{ $profile ? $profile->background : '' }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-3"></div>
                        <div class="col-md-4">
                            <a href="{{ route('profile.show') }}" class="btn btn-yellow">
                                Cancel
                            </a>
                        </div>
                        <div class="col-md-5 text-end">
                            <button type="submit" class="btn btn-blue">
                                {{ $profile ? 'Update Profile' : 'Create Profile' }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
