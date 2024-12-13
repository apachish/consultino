<div>
@if($doctors->count())
<div class="tm-section team-members-area bg-white tm-padding-section">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7 col-md-10 col-12">
                <div class="tm-section-title text-center">
                    <h2>{{__("Getting to know the psychotherapists of the psychology center")}}</h2>
                    <span class="divider"><i class="fa fa-superpowers"></i></span>
                    <p>"انتخابی مطمئن برای سلامتی، در کنار بهترین متخصصان"</p>
                </div>
            </div>
        </div>
        <div class="row mt-30-reverse">

            @foreach($doctors as $doctor)
            <!-- Team Member -->
            <div class="col-lg-3 col-md-6 col-12 mt-30">
                <div class="tm-member wow fadeInUp">
                    <div class="tm-member-top">
                        <img src="{{data_get($doctor,'avatar','assets/images/team/team-member-1.jpg')}}" alt="team member">
                        <div class="tm-member-social">
                            <ul>
{{--                                twitter--}}
{{--                                facebook-f--}}
{{--                                instagram--}}
{{--                                linkedin--}}
{{--                                telegram--}}
                                @foreach(data_get($doctor,'properties.social') as $key=>$social)
                                    <li><a href="{{$social}}"><i class="fa fa-{{$key}}"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="tm-member-bottom">
                        <h5>{{data_get($doctor,'fullName')}}</h5>
                        <p>{{data_get($doctor,'degree')}}</p>
                    </div>
                </div>
            </div>
            <!--// Team Member -->

            @endforeach
        </div>
    </div>
</div>

@endif
</div>
