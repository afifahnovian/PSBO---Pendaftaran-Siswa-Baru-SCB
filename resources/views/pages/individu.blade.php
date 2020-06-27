@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'individu'
])
@section('content')
    @if(session('info'))
    <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <p class="mb-0">{{session('info')}}</p>
    </div>
    @endif
    <div class="content">
        <div class="row">
            <div class="col-md-8" id="slider" style="width: 70%; float:left">
                <div class="DetailInfo">
                    <input type='hidden' id='current_page' />
                        <input type='hidden' id='show_per_page' />
                            <ul id="pagingBox">
                                <li> <div class="slide"> @include('pages.detail-individu.slide1') </div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide2')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide3')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide4')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide5')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide6')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide7')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide8')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide9')</div> </li>
                                <li> <div class="slide"> @include('pages.detail-individu.slide10')</div> </li>
                            </ul>
                    </div>
                    <div id='page_navigation' style="align-content: center; margin-left:12%; margin-right:12%"></div>
            </div>

            <div class="col" style="width: 25%;float:right">
                    <form id="editstatus">
                        <div class="card">
                            <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
                                <div class="card-header">
                                    <h4 class="card-title"> {{__(' Status Siswa')}} </h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-bottom: 3%"> {{__('Status')}}</label>
                                        <div class="col">
                                            <a>: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_siswa')->first() }} </a>
                                            <!-- <a>: {{$calonsiswa->status_siswa}} </a> -->
                                        </div>
                                    </div>
                                </div>
                            
                            <hr>
                            <div class="card-footer">
                                <td class="text-right">
                                    <a href="{{url('/pages/update/'.$calonsiswa->id)}}" class="btn btn-sm btn-primary" role="button">
                                        Ubah
                                    </a>
                                </td>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
<script>
        jQuery(document).ready(function () {

            //Pagination JS
            //how much items per page to show
            var show_per_page = 1; 
            //getting the amount of elements inside pagingBox div
            var number_of_items = $('#pagingBox').children().size();
            //calculate the number of pages we are going to have
            var number_of_pages = Math.ceil(number_of_items/show_per_page);

            //set the value of our hidden input fields
            $('#current_page').val(0);
            $('#show_per_page').val(show_per_page);

            var navigation_html = '<a class="previous_link" href="javascript:previous();">Prev</a>';
            var current_link = 0;
            while(number_of_pages > current_link){
                navigation_html += '<a class="page_link" href="javascript:go_to_page(' + current_link +')" longdesc="' + current_link +'">'+ (current_link + 1) +'</a>';
                current_link++;
            }
            navigation_html += '<a class="next_link" href="javascript:next();">Next</a>';

            $('#page_navigation').html(navigation_html);

            //add active_page class to the first page link
            $('#page_navigation .page_link:first').addClass('active_page');

            //hide all the elements inside pagingBox div
            $('#pagingBox').children().css('display', 'none');

            //and show the first n (show_per_page) elements
            $('#pagingBox').children().slice(0, show_per_page).css('display', 'block');

        });
        

        //Pagination JS
        function previous(){
            new_page = parseInt($('#current_page').val()) - 1;
            //if there is an item before the current active link run the function
            if($('.active_page').prev('.page_link').length==true){
            go_to_page(new_page);
            }
        }

        function next(){
            new_page = parseInt($('#current_page').val()) + 1;
            //if there is an item after the current active link run the function
            if($('.active_page').next('.page_link').length==true){
            go_to_page(new_page);
            }
        }

        function go_to_page(page_num){
            //get the number of items shown per page
            var show_per_page = parseInt($('#show_per_page').val());

            //get the element number where to start the slice from
            start_from = page_num * show_per_page;

            //get the element number where to end the slice
            end_on = start_from + show_per_page;

            //hide all children elements of pagingBox div, get specific items and show them
            $('#pagingBox').children().css('display', 'none').slice(start_from, end_on).css('display', 'block');

            /*get the page link that has longdesc attribute of the current page and add active_page class to it
            and remove that class from previously active page link*/
            $('.page_link[longdesc=' + page_num +']').addClass('active_page').siblings('.active_page').removeClass('active_page');

            //update the current page input field
            $('#current_page').val(page_num);
        }
            

</script>
@endpush