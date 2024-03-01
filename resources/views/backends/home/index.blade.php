@extends('layouts.backend')

@section('css')
@endsection


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.home') }}">Dashboard</a>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="card overflow-hidden">
                <div class="bg-primary bg-soft">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Tekrar Hoşgeldiniz !</h5>
                                <p>Localkod Dashboard</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('assets/backend/images/profile-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset('assets/images/defaults/avatar.png') }}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate">{{ auth()->user()->name }}</h5>
                            <p class="text-muted mb-0 text-truncate">
                                <span class="badge badge-pill badge-soft-danger font-size-12 p-2">
                                    {{ auth()->user()->getRoleName() }}
                                </span>
                            </p>
                        </div>

                        {{-- <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="font-size-15">125</h5>
                                        <p class="text-muted mb-0">Projects</p>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="font-size-15">$1245</h5>
                                        <p class="text-muted mb-0">Revenue</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('modal')
@endsection

@section('js')
@endsection
