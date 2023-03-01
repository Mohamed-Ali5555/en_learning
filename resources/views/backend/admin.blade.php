    @extends('backend.layouts.master')
    @section('content')
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mb-0"> @lang('site.dashboard')</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
        <!-- widgets -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <span class="text-danger">
                                    <i class="fa fa-user highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">@lang('site.users')</p>
                                {{-- <h4>{{ \App\User::count() }}</h4> --}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <span class="text-danger">
                                    <i class="fa fa-user highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">@lang('site.slider')</p>
                                {{-- <h4>{{ \App\Models\Slider::count() }}</h4> --}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <span class="text-success">
                                    <i class="fa fa-list highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark"> @lang('site.categories')</p>
                                {{-- <h4>{{ \App\Models\Category::count() }}</h4> --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <span class="text-primary">
                                    <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">@lang('site.products')</p>
                                {{-- <h4>{{ \App\Models\Product::count() }}</h4> --}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                <span class="text-primary">
                                    <i class="fa fa-product-hunt highlight-icon" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">@lang('site.message')</p>
                                {{-- <h4>{{ \App\Models\Message::count() }}</h4> --}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    @endsection
