 <!-- Footer-->
 <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Narahubung-->
                <div class="col-lg-4-2 mb-5 mb-lg-0 container">
                    <h4 style ="color:#f8b400;">Narahubung</h4><br>
                    <footer class="text-left">
                        <ul style=" list-style-type:none;" id="narahubung-footer">
                        @if(!empty($data_posts))
                            <li><a class="btn1 btn-social mx-3 mb-2"><i class="fas fa-fw fa-phone-alt" style ="color:#004445;" ></i></a><span class="lead mb-0" style="font-size:110%;">{{$data_posts->where('tipe_post','narahubung-1')->first()->isi_post}}</span></li>
                            <li><a class="btn1 btn-social mx-3 mb-2"><i class="fas fa-fw fa-phone-alt" style ="color:#004445;"></i></a><span class="lead mb-0" style="font-size:110%;">{{$data_posts->where('tipe_post','narahubung-2')->first()->isi_post}}</span></li>
                            <li><a class="btn1 btn-social mx-3 mb-2"><i class="fas fa-fw fa-phone-alt" style ="color:#004445;"></i></a><span class="lead mb-0" style="font-size:110%;">{{$data_posts->where('tipe_post','narahubung-3')->first()->isi_post}}</span></li>
                        @endif
                        </ul>
                    </nav>
                    </footer>
                </div>
                <!-- Footer Sosisal media-->
                <div class="col-lg-4-2 mb-5 mb-lg-0 container">
                    <h4 style ="color:#f8b400;">Sosial Media</h4><br>
                    <div class="row" style="display:block;margin-left:auto;margin-right:auto;width:100%">
                    @if(!empty($data_posts))
                        <a class="btn btn-outline-light btn-social mx-1" href="{{$data_posts->where('tipe_post','website-scb')->first()->isi_post}}"><i class="fas fa-fw fa-globe" style ="color:#f8b400;"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{$data_posts->where('tipe_post','twitter-scb')->first()->isi_post}}"><i class="fab fa-fw fa-twitter" style ="color:#f8b400;"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{$data_posts->where('tipe_post','email-scb')->first()->isi_post}}"><i class="fas fa-envelope-open-text" style ="color:#f8b400;"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{$data_posts->where('tipe_post','facebook-scb')->first()->isi_post}}"><i class="fab fa-fw fa-facebook-f" style ="color:#f8b400;"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="{{$data_posts->where('tipe_post','instagram-scb')->first()->isi_post}}"><i class="fab fa-fw fa-instagram" style ="color:#f8b400;"></i></a>
                    @endif
                    </div>
                </div>
                <!-- Footer Informasi Sekolah-->
                <div class="col-lg-4-2">
                    <h4 style ="color:#f8b400;">Informasi Sekolah</h4><br>
                    @if(!empty($data_posts))
                        <p class="lead mb-0" style="font-size:110%;">SMP Cendekia BAZNAS<br> {{$data_posts->where('tipe_post','alamat-scb')->first()->isi_post}}</p>
                    @endif
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
    </div>