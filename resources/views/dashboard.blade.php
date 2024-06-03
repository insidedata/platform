@extends(config('platform.workspace', 'platform::workspace.compact'))

@section('aside')

    
    <div class="aside col-xs-12 col-xxl-2 bg-light d-flex flex-column me-auto" data-controller="menu">
       
        <header class="" style="height:70px; margin-left:-11px; margin-right:-11px;  border-bottom:1px solid #e5e7eb;">
            <img src="https://cdn2.insidedata.co.uk/qa4fqe/application/company_images/qa4fqe.jpg&w=180&h=40&fit=max&fm=webp&q=100&dpr=1" class="p-4" />          
        </header>

        <nav class="aside-collapse w-100 d-xl-flex flex-column collapse-horizontal" id="headerMenuCollapse">

            <div data-controller="tabs" data-tabs-slug="88d2c8bbcc95d5468b800e3b08c090e4d40aec38" data-tabs-active-tab="">
                <div class="nav-tabs-alt">
                    <ul class="nav nav-tabs nav-tabs-scroll-bar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-action="tabs#setActiveTab" data-bs-target="#tab-example-tab-1" id="button-tab-example-tab-1" aria-selected="true" role="tab" data-bs-toggle="tab">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-action="tabs#setActiveTab" data-bs-target="#tab-example-tab-2" id="button-tab-example-tab-2" aria-selected="false" role="tab" data-bs-toggle="tab" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-radio"><circle cx="12" cy="12" r="2"></circle><path d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path></svg>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-action="tabs#setActiveTab" data-bs-target="#tab-example-tab-3" id="button-tab-example-tab-3" aria-selected="false" role="tab" data-bs-toggle="tab" tabindex="-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            </a>
                        </li>
                    </ul>
                </div>

                <section class="">
                    <div class="no-border-xs">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active show" id="tab-example-tab-1" aria-labelledby="button-tab-example-tab-1">
                                
                                    @include('platform::partials.search')

                                    <ul class="nav flex-column mb-md-1 mb-auto ps-0">
                                        {!! Dashboard::renderMenu(\Orchid\Platform\Dashboard::MENU_MAIN) !!}
                                    </ul>
                           

                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-example-tab-2" aria-labelledby="button-tab-example-tab-2">
                                <div class="rounded bg-white mb-3 p-3">
                                    <div class="border-dashed d-flex align-items-center w-100 rounded overflow-hidden" style="min-height: 250px;">
                                        <h2 class="text-muted center fw-light">Dummy <small class="d-block text-center">gMUsWhm0</small></h2>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-example-tab-3" aria-labelledby="button-tab-example-tab-3">
                                <div class="rounded bg-white mb-3 p-3">
                                    <div class="border-dashed d-flex align-items-center w-100 rounded overflow-hidden" style="min-height: 250px;">
                                        <h2 class="text-muted center fw-light">Dummy <small class="d-block text-center">1rdwKrWC</small></h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
          
            </div>

            

            <div class="h-100 w-100 position-relative to-top cursor d-none d-md-flex mt-md-5"
                 data-action="click->html-load#goToTop"
                 title="{{ __('Scroll to top') }}">
                <div class="bottom-left w-100 mb-2 ps-3 overflow-hidden">
                    <small data-controller="viewport-entrance-toggle"
                           class="scroll-to-top"
                           data-viewport-entrance-toggle-class="show">
                        <x-orchid-icon path="bs.chevron-up" class="me-2"/>
                        {{ __('Scroll to top') }}
                    </small>
                </div>
            </div>

         
        </nav>
    </div>
@endsection

@section('workspace')
    
    <div class="" style="height:70px; margin-top:-22px; margin-left:-11px; margin-right:-11px; margin-bottom:10px;  background:white; border-bottom:1px solid #e5e7eb">
    
         @includeWhen(Auth::check(), 'platform::partials.profile')
        
    </div>
    <div class="order-last order-md-0 command-bar-wrapper" style="background:white; padding:20px; margin-left:-11px;margin-right:-11px;margin-top:-10px; margin-bottom:20px;">
        <div class="@hasSection('navbar') @else d-none d-md-block @endif  d-md-flex align-items-center">

            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">@yield('title')</h5>
                    </div>
              
                    <ul class="breadcrumb ">
                        <x-tabuna-breadcrumbs class="breadcrumb-item" active="active" />
                    </ul>
                </div>
                
            </div>

            
             <nav class="col-xs-12 col-md-auto ms-md-auto p-0">
                <ul class="nav command-bar justify-content-sm-end justify-content-start d-flex align-items-center gap-2 flex-wrap-reverse flex-sm-nowrap">
                    @yield('navbar')
                </ul>
            </nav>
        </div>
    </div>

    @include('platform::partials.alert')

    <div class="ps-3 pe-3">
        @yield('content')
    </div>

@endsection
