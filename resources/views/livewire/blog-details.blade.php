<div class="tm-section blogs-area bg-white tm-padding-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="tm-blog tm-blog-details sticky-sidebar">
                    {{--                    image--}}
                    @if(data_get($blog,'type')=="image")
                        <div class="tm-blog-image">
                            <a href="{{route("blog.details",["slug"=>data_get($blog,'slug')])}}">
                                <img src="{{data_get($blog,'parameters.image.value')}}" alt="{{data_get($blog,'title')}}">
                            </a>
                        </div>
                        {{--                    audio--}}
                    @elseif(data_get($blog,'type')=="iframe_sound")
                        <div class="tm-blog-audio">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="{{data_get($parameters,'iframe_sound.value')}}"></iframe>
                            </div>
                        </div>
                    {{--                    imageslider--}}
                    @elseif(data_get($blog,'type')=="slider")
                        <div class="tm-blog-imageslider tm-slider-arrow tm-slider-dots">
                            @php
                                $slider = data_get($parameters,'slider');
                                $slider =  json_decode(data_get($slider,'value'),true)
                            @endphp
                            @foreach($slider as $slide)
                                <a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}"
                                   class="blogitem-imageslider-image">
                                    <img src="{{data_get($slide,'image')}}" alt="{{data_get($slide,'title')}}">
                                </a>
                            @endforeach
                        </div>
                        {{--                    video--}}
                    @elseif(data_get($blog,'type')=="iframe")
                        <div class="tm-blog-video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                        src="{{data_get($parameters,'iframe.value')}}"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif
                    <div class="tm-blog-content">
                        <div class="tm-blog-meta">
                                    <span><i class="fa fa-user-o"></i>{{__("Writer")}}
                                        <a href="{{route("blog.details",["category"=>data_get($blog,'category'),"slug"=>data_get($blog,'slug')])}}">
                                            {{data_get($blog,'user.name')}}
                                        </a>
                                    </span>
                            <span><i class="fa fa-calendar-o"></i>{{toJalali(data_get($blog,"created_at"))}}</span>

                            <span><i class="fa fa-folder-o"></i>
                                <a href="{{route("blog",["category"=>data_get($blog,'category')])}}">
                                    {{data_get($blog,'category')}}
                                </a></span>
                        </div>
                        <h3>{{data_get($blog,'title')}}</h3>
                        {!! data_get($blog,'body') !!}
                    </div>
                    <div class="tm-blog-tags">
                                    <span class="tm-blog-tags-title">
                                        <i class="fa fa-tags"></i>
                                    </span>
                        <ul>
                            @foreach(data_get($blog,'tags') as $tag)
                                <li>
                                    <a href="{{route("blog")."?tag=".data_get($tag,'title')}}">
                                        {{data_get($tag,'title')}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="tm-blog-pagination tm-pagination">
                        <ul>
                            @if($previous)
                                <li>
                                    <a href="{{route("blog.details",["category"=>data_get($previous,'category'),'slug'=>data_get($previous,'slug')])}}">
                                        {{__("Previous Post")}}
                                    </a>
                                </li>
                            @endif
                            @if($next)
                                <li>
                                    <a href="{{route("blog.details",["category"=>data_get($next,'category'),'slug'=>data_get($next,'slug')])}}">
                                        {{__("Next Post")}}
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <!-- tm-blog Comments -->
                    <div class="tm-blog-comments mt-50">
                        <h5 class="small-title">{{__("Comments")}} ({{data_get($blog,"comments_count")}})</h5>

                        <div class="tm-comment-wrapper">

                            @foreach(data_get($blog,'comments') as $comment)
                            <!-- Comment Single -->
                            <div class="tm-comment {{data_get($comment,'parent_id')?"tm-comment-replypost":""}}">
                                <div class="tm-comment-content">
                                    <h6 class="tm-comment-authorname">{{data_get($comment,'customer.fullName')}}</h6>
                                    <span class="tm-comment-date">{{tojalali($comment,'created_at',"%A, %d %B %y")}}</span>
                                    <a href="#" class="tm-comment-replybutton"><i class="fa fa-reply-all"></i>
                                        {{__("Reply")}}</a>
                                    <p>{{data_get($comment,'message')}}</p>
                                </div>
                            </div>
                            <!--// Comment Single -->
                            @endforeach

                        </div>

                    </div>
                    <!--// tm-blog Comments -->

                    <!-- tm-blog Commentbox -->
                    <div class="tm-blog-commentbox mt-50">
                        <h5 class="small-title">{{__("Leave a Comment")}} </h5>
                        <form wire:submit="sendComment" class="tm-commentbox">
                            <div class="tm-commentbox-singlefield">
                                <p>{{__("Your email address will not be published. Required fields are marked")}} *</p>
                            </div>
                            <div class="tm-commentbox-singlefield w-66">
                                <label for="tm-comment-namefield">{{__("Enter Full Name")}}*</label>
                                <input type="text" id="tm-comment-namefield" wire:model="comment.fullName"
                                       class="@error('comment.fullName') is-invalid @enderror" required="required">
                                @if ($errors->has('comment.fullName'))
                                    <span class="text-danger">{{ $errors->first('comment.fullName') }}</span>
                                @endif
                            </div>
                            <div class="tm-commentbox-singlefield w-66">
                                <label for="tm-comment-email">{{__("Enter email address")}}*</label>
                                <input type="email" id="tm-comment-email"  wire:model="comment.email"
                                       class="@error('comment.email') is-invalid @enderror" required="required">
                                @if ($errors->has('comment.email'))
                                    <span class="text-danger">{{ $errors->first('comment.email') }}</span>
                                @endif
                            </div>
                            <div class="tm-commentbox-singlefield">
                                <label for="tm-comment-textbox">{{__("Comment")}}</label>
                                <textarea name="tm-comment-textbox" id="tm-comment-textbox" cols="30"
                                          rows="7"
                                          wire:model="comment.message"
                                          class="@error('comment.message') is-invalid @enderror" required="required"
                                ></textarea>
                                @if ($errors->has('comment.message'))
                                    <span class="text-danger">{{ $errors->first('comment.message') }}</span>
                                @endif
                            </div>
                            <div class="tm-commentbox-singlefield">
                                <button type="submit" class="tm-button">{{__("Post Comment")}} <b></b></button>
                            </div>
                        </form>
                        <div class="mb-3 row">
                            <span wire:loading class="col-md-3 offset-md-5 text-primary">Processing...</span>
                        </div>
                    </div>
                    <!--// tm-blog Commentbox -->

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="widgets sidebar-widgets sticky-sidebar">

                    <!-- Single Widget -->
                    <div class="single-widget widget-search">
                        <h5 class="widget-title">{{__("Search")}}</h5>
                        <form action="#" class="widget-search-form">
                            <input type="text" placeholder="{{__("Search")}}...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-categories">
                        <h5 class="widget-title">{{__("Categories")}}</h5>
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{route("blog",["category"=>$category])}}">{{$category}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-recentpost">
                        <h5 class="widget-title">{{__("Recent Posts")}}</h5>
                        <ul>
                            @foreach($recent_post as $post)
                            <li>
                                <div class="widget-recentpost-content">
                                    <h6><a
                                            href="{{route("blog.details",["category"=>data_get($post,'category'),'slug'=>data_get($post,'slug')])}}">
                                            {{data_get($post,'title')}}</a></h6>
                                    <span>{{tojalali(data_get($post,'created_at'),"%A, %d %B %y")}}</span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-archives">
                        <h5 class="widget-title">{{__("Archives")}}</h5>
                        <ul>
                            @foreach($archives as  $archive)
                                @if(data_get($archive,'article_count'))
                            <li><a href="{{route("blog")."?month=".data_get($archive,'month')}}">
                                    {{data_get($archive,'name')." ".data_get($archive,'year')." (".data_get($archive,'article_count').")"}}
                                </a>
                            </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                    <!-- Single Widget -->
                    <div class="single-widget widget-tags">
                        <h5 class="widget-title">{{__("tags")}}</h5>
                        <ul>
                            @foreach($tags as $tag)
                                @if(data_get($tag,'title'))
                                <li><a href="{{route("blog")."?tag=".data_get($tag,'title')}}">{{data_get($tag,'title')}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!--// Single Widget -->

                </div>
            </div>
        </div>
    </div>
</div>
