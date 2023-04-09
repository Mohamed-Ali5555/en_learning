

                                                    {{-- @php
                                                        $moreVideos12 = \App\Models\moreVideo::where('categoryVideo_id',$categoryVideo->id)->get();
                                                    @endphp --}}
                                                    @if ($moreVideos->count() > 0)
                                                        @foreach ($moreVideos as $moreVideo)
                                                            <div class="item col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                <div class="z">
                                                                    <div class="img">
                                                                        <div class="img-1">
                                                                            <img  src="{{ asset("storage/$moreVideo->image") }}"
                                                                                alt="" style="width:370px;height:200px;">
                                                                        </div>
                                                                    
                                                                    </div>
                                                                    <div class="ct">
                                                                        <div class="text_show p-2">
                                                                            <h3><a
                                                                                    href="{{ route('video.detail', $moreVideo->id) }}">{{ $moreVideo->title }}</a></h3>
                                                                          
                                                                        </div>
                                                                        {{-- <div class="donate">
                                                                                <div class="button_donate">
                                                                                    <a href="#">Donate Now</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="raised">
                                                                                <p><span>$45,583</span> Raised of <b>$78,324</b> Goal</p>
                                                                            </div> --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @else
                                                        <div>not found</div>
                                                    @endif
                              
                        {{-- @endforeach --}}