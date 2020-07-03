<h3 class="page-section-heading1 text-center text-secondary">Frequently Ask Question</h3>
<div class="container">
    <!-- Portfolio Grid Items-->
    <div class="row" style="align-content: center; padding-top:5%; padding-bottom:5%">   
        <!-- Portfolio Item 2-->
        <div class="col" style="padding-right: 5%; padding-left:5%" >
            <div class="accordion" class="myaccordion">
            @if($faq->count() > 0)
                @foreach($faq as $index => $faqs)
                    <!-- card-->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="m-2" >
                                <a id="question" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $index }}">{{ $faqs->question }}</a>
                            </h6>
                        </div>

                        <div id="collapse-{{ $index }}" class="panel-collapse collapse in">
                            <div class="card-body">
                                @php 
                                echo $faqs->answer 
                                @endphp
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
            </div>
        
        </div>

    </div>
</div>