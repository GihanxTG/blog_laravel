@extends('layout')

@section('tieudetrang')
    Trang chi tiết
@endsection

@section('noidung')
        <!-- Single Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <!-- <ol class="breadcrumb justify-content-start mb-4">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-dark">Single Page</li>
                </ol> -->
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="mb-4">
                            <a href="#" class="h1 display-5">{{$detail->tieuDe}}</a>
                        </div>
                        <!-- <div class="position-relative rounded overflow-hidden mb-3">
                            <img src="img/news-1.jpg" class="img-zoomin img-fluid rounded w-100" alt="">
                            <div class="position-absolute text-white px-4 py-2 bg-primary rounded" style="top: 20px; right: 20px;">                                              
                                Busimess
                            </div>
                        </div> -->
                        <div class="d-flex justify-content-between">
                            <a href="#" class="text-dark link-hover me-3"><i class="fas fa-calendar-alt me-1"></i> {{$detail->ngayDang}}</a>
                            <a href="#" class="text-dark link-hover me-3"><i class="fa fa-eye"></i> {{$detail->xem}} Lượt xem</a>
                        </div>
                        <p class="my-4">{!! $detail->noiDung !!}</p>
                        <div class="tab-class">
                            <div class="d-flex justify-content-between border-bottom mb-4">
                                <ul class="nav nav-pills d-inline-flex text-center">
                                    <li class="nav-item mb-3">
                                        <h5 class="mt-2 me-3 mb-0">Tags:</h5>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 bg-light rounded-pill active me-2" data-bs-toggle="pill" href="#tab-1">
                                            <span class="text-dark" style="width: 100px;">Sports</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-2">
                                            <span class="text-dark" style="width: 100px;">Magazine</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 bg-light rounded-pill me-2" data-bs-toggle="pill" href="#tab-3">
                                            <span class="text-dark" style="width: 100px;">Politics</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 me-3">Share:</h5>
                                    <i class="fab fa-facebook-f link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                                    <i class="btn fab bi-twitter link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                                    <i class="btn fab fa-instagram link-hover btn btn-square rounded-circle border-primary text-dark me-2"></i>
                                    <i class="btn fab fa-linkedin-in link-hover btn btn-square rounded-circle border-primary text-dark"></i>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show active">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-3">
                                            <img src="img/footer-4.jpg" class="img-fluid w-100 rounded" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h3>Amelia Alex</h3>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                             but also the leap into electronic.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-3">
                                            <img src="img/footer-5.jpg" class="img-fluid w-100 rounded" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h3>Amelia Alex</h3>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                             but also the leap into electronic.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-3">
                                            <img src="img/footer-6.jpg" class="img-fluid w-100 rounded" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h3>Amelia Alex</h3>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                             but also the leap into electronic.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded my-4 p-4">
                            <h4 class="mb-4">You Might Also Like</h4>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="img/chatGPT.jpg" class="img-fluid rounded" alt="">
                                        <div class="ms-3">
                                            <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the printing</a>
                                            <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute read</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center p-3 bg-white rounded">
                                        <img src="img/chatGPT-1.jpg" class="img-fluid rounded" alt="">
                                        <div class="ms-3">
                                            <a href="#" class="h5 mb-2">Lorem Ipsum is simply dummy text of the printing</a>
                                            <p class="text-dark mt-3 mb-0 me-3"><i class="fa fa-clock"></i> 06 minute read</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4">
                            <h4 class="mb-4">Comments</h4>
                            <div class="p-4 bg-white rounded mb-4">
                                <div class="row g-4">
                                    <div class="col-3">
                                        <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex justify-content-between">
                                            <h5>James Boreego</h5>
                                            <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                        </div>
                                        <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 bg-white rounded mb-0">
                                <div class="row g-4">
                                    <div class="col-3">
                                        <img src="img/footer-4.jpg" class="img-fluid rounded-circle w-100" alt="">
                                    </div>
                                    <div class="col-9">
                                        <div class="d-flex justify-content-between">
                                            <h5>James Boreego</h5>
                                            <a href="#" class="link-hover text-body fs-6"><i class="fas fa-long-arrow-alt-right me-1"></i> Reply</a>
                                        </div>
                                        <small class="text-body d-block mb-3"><i class="fas fa-calendar-alt me-1"></i> Dec 9, 2024</small>
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy Lorem Ipsum has been the industry's standard dummy type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light rounded p-4 my-4">
                            <h4 class="mb-4">Leave A Comment</h4>
                            <form action="#">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control py-3" placeholder="Full Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control py-3" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="textarea" id="" cols="30" rows="7" placeholder="Write Your Comment Here"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="form-control btn btn-primary py-3" type="button">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product End -->
@endsection