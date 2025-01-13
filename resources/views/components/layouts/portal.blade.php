<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" style="z-index:20">
        <div class="sidebar-header position-relative ">
            <img src="{{asset('lam-ang/images/hdmis.png')}}" alt=""
                 style="max-width:10rem" class="justify-content-center">
            <a type="button" id="sidebarCollapse" class="btn btn-secondary"
               style="position: absolute; right:-25px; top:25px ">
                {{--                <x-awesome.edit></x-awesome.edit>--}}
                <x-awesome.chevron class=""></x-awesome.chevron>
            </a>
        </div>
        <ul class="list-unstyled accordion accordion-flush mt-5" id="accordionFlush">
            <li>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Dashboard
                </button>

                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>

                </div>
            </li>
            <li>

                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <span class="me-2"><svg class="awesome-icon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 384 512">
                            <path fill="#ffffff"
                                  d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM104 196h72c33.1 0 60 26.9 60 60c0 25.5-15.9 47.2-38.3 55.9l43 40.3 33.8-31c8.1-7.5 20.8-6.9 28.3 1.2s6.9 20.8-1.2 28.3L270 379.7l31.7 29.7c8.1 7.6 8.5 20.2 .9 28.3s-20.2 8.5-28.3 .9l-33.9-31.8-34.9 32c-8.1 7.5-20.8 6.9-28.3-1.2s-6.9-20.8 1.2-28.3l32.6-29.9-64.8-60.8c-.9-.8-1.6-1.7-2.3-2.6H124v44c0 11-9 20-20 20s-20-9-20-20V296 216c0-11 9-20 20-20zm72 80c11 0 20-9 20-20s-9-20-20-20H124v40h52z"/></svg>
                    </span>Transaction
                </button>

                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlush">
                    <ul class="list-unstyled">
                        <li class="{{ Route::currentRouteName() === 'pharmacy.transaction.return' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.transaction.issue')}}">Issue</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.transaction.return' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.transaction.return')}}">Return</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <span class="me-2"><svg class="awesome-icon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512">
                            <path fill="#ffffff"
                                  d="M112 96c-26.5 0-48 21.5-48 48V256h96V144c0-26.5-21.5-48-48-48zM0 144C0 82.1 50.1 32 112 32s112 50.1 112 112V368c0 61.9-50.1 112-112 112S0 429.9 0 368V144zM554.9 399.4c-7.1 12.3-23.7 13.1-33.8 3.1L333.5 214.9c-10-10-9.3-26.7 3.1-33.8C360 167.7 387.1 160 416 160c88.4 0 160 71.6 160 160c0 28.9-7.7 56-21.1 79.4zm-59.5 59.5C472 472.3 444.9 480 416 480c-88.4 0-160-71.6-160-160c0-28.9 7.7-56 21.1-79.4c7.1-12.3 23.7-13.1 33.8-3.1L498.5 425.1c10 10 9.3 26.7-3.1 33.8z"/></svg> </span>Stocks
                </button>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                     data-bs-parent="#accordionFlush">
                    <ul class="list-unstyled">
                        <li class="{{ Route::currentRouteName() === 'pharmacy.stocks.summary' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.stocks.summary')}}">Summary</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.stocks.detailed' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.stocks.detailed')}}">Detailed</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.stocks.expired' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.stocks.expired')}}">Expired</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseReportsInventory" aria-expanded="false"
                        aria-controls="flush-collapseReportsInventory">
                    <span class="me-2"><svg class="awesome-icon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 640 512">
                            <path fill="#ffffff"
                                  d="M232 0c-39.8 0-72 32.2-72 72v8H72C32.2 80 0 112.2 0 152V440c0 39.8 32.2 72 72 72h.2 .2 .2 .2 .2H73h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2H75h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2H77h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2H79h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2H82h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2H85h.2 .2 .2 .2H86h.2 .2 .2 .2H87h.2 .2 .2 .2H88h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2H98h.2 .2 .2 .2H99h.2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2 .2v0H456h8v0H568c39.8 0 72-32.2 72-72V152c0-39.8-32.2-72-72-72H480V72c0-39.8-32.2-72-72-72H232zM480 128h88c13.3 0 24 10.7 24 24v40H536c-13.3 0-24 10.7-24 24s10.7 24 24 24h56v48H536c-13.3 0-24 10.7-24 24s10.7 24 24 24h56V440c0 13.3-10.7 24-24 24H480V336 128zM72 128h88V464h-.1-.2-.2-.2H159h-.2-.2-.2H158h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H154h-.2-.2-.2H153h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H150h-.2-.2-.2H149h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H146h-.2-.2-.2H145h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H142h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H139h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H136h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H133h-.2-.2-.2-.2-.2-.2-.2-.2H131h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H128h-.2-.2-.2-.2-.2-.2-.2-.2H126h-.2-.2-.2-.2-.2-.2-.2-.2H124h-.2-.2-.2-.2-.2-.2-.2-.2H122h-.2-.2-.2-.2-.2-.2-.2-.2H120h-.2-.2-.2-.2-.2-.2-.2-.2H118h-.2-.2-.2-.2-.2-.2-.2-.2H116h-.2-.2-.2-.2-.2-.2-.2-.2H114h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H111h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H108h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H105h-.2-.2-.2-.2H104h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H100h-.2-.2-.2-.2H99h-.2-.2-.2-.2H98h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H88h-.2-.2-.2-.2H87h-.2-.2-.2-.2H86h-.2-.2-.2-.2H85h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H82h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H79h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H77h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H75h-.2-.2-.2-.2-.2-.2-.2-.2-.2-.2H73h-.2-.2-.2-.2-.2H72c-13.2 0-24-10.7-24-24V336h56c13.3 0 24-10.7 24-24s-10.7-24-24-24H48V240h56c13.3 0 24-10.7 24-24s-10.7-24-24-24H48V152c0-13.3 10.7-24 24-24zM208 72c0-13.3 10.7-24 24-24H408c13.3 0 24 10.7 24 24V336 464H368V400c0-26.5-21.5-48-48-48s-48 21.5-48 48v64H208V72zm88 24v24H272c-8.8 0-16 7.2-16 16v16c0 8.8 7.2 16 16 16h24v24c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16V168h24c8.8 0 16-7.2 16-16V136c0-8.8-7.2-16-16-16H344V96c0-8.8-7.2-16-16-16H312c-8.8 0-16 7.2-16 16z"/></svg></span>
                    Hospital Inventory
                </button>
                <div id="flush-collapseReportsInventory" class="accordion-collapse collapse"
                     data-bs-parent="#accordionFlush">
                    <ul class="list-unstyled">
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.inventory.summary' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.inventory.summary')}}">Summary</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.inventory.detailed' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.inventory.detailed')}}">Detailed</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.inventory.expired' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.inventory.expired')}}">Expired</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseReportsTransaction" aria-expanded="false"
                        aria-controls="flush-collapseFour">
                    <span class="me-2"><svg class="awesome-icon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                        <path fill="#ffffff"
                              d="M0 96C0 60.7 28.7 32 64 32H196.1c19.1 0 37.4 7.6 50.9 21.1L289.9 96H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM64 80c-8.8 0-16 7.2-16 16V416c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V160c0-8.8-7.2-16-16-16H286.6c-10.6 0-20.8-4.2-28.3-11.7L213.1 87c-4.5-4.5-10.6-7-17-7H64z"/></svg>
                     </span>
                    Reports
                </button>
                <div id="flush-collapseReportsTransaction" class="accordion-collapse collapse"
                     data-bs-parent="#accordionFlush">
                    <ul class="list-unstyled">
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.listoftransaction'? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.listoftransaction')}}">Transactions</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.listofreturns' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.listofreturns')}}">Return Transactions</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.dailyissuance' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.dailyissuance')}}">Daily Meds Issuance</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.stockcard' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.stockcard')}}">Stock Card</a>
                        </li>
                        <li class="{{ Route::currentRouteName() === 'pharmacy.reports.consumption' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.reports.consumption')}}">Consumption Report</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSettings" aria-expanded="false"
                        aria-controls="flush-collapseSettings">
                    <span class="me-2"><svg class="awesome-icon" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                            <path fill="#ffffff"
                                  d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg></span>Settings
                </button>
                <div id="flush-collapseSettings" class="accordion-collapse collapse"
                     data-bs-parent="#accordionFlush">
                    <ul class="list-unstyled">
                        <li class="{{ Route::currentRouteName() === 'pharmacy.settings.medicine' ? 'highlight' : '' }}">
                            <a wire:navigate href="{{route('pharmacy.settings.medicine')}}">Medicines</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>


        <ul class="list-unstyled w-100" style="position:absolute; bottom: 0">
            <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button class="btn text-white form-control d-flex justify-content-between"
                            href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">
                        <span>
                        Log-out
                            </span>
                        <span>
                        <svg class="awesome-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="#ffffff"
                              d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V256c0 17.7 14.3 32 32 32s32-14.3 32-32V32zM143.5 120.6c13.6-11.3 15.4-31.5 4.1-45.1s-31.5-15.4-45.1-4.1C49.7 115.4 16 181.8 16 256c0 132.5 107.5 240 240 240s240-107.5 240-240c0-74.2-33.8-140.6-86.6-184.6c-13.6-11.3-33.8-9.4-45.1 4.1s-9.4 33.8 4.1 45.1c38.9 32.3 63.5 81 63.5 135.4c0 97.2-78.8 176-176 176s-176-78.8-176-176c0-54.4 24.7-103.1 63.5-135.4z"/></svg>
                        </span>
                    </button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <div class="row">
            <div class="col-md-12">
                @if (isset($header))
                    <header class="p-3  ">
                        <h2>{{ $header }}</h2>
                        @if(isset($subheader))
                            <p>{{$subheader}}</p>
                        @endif
                    </header>
                @endif
            </div>
        </div>
        {{ $slot }}
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js"
        integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA=="
        crossOrigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
            $(".rotate").toggleClass("side");
        });

        // Check if an accordion section was previously opened
        var activeSection = localStorage.getItem('activeAccordionSection');

        if (activeSection) {
            // Open the previously active section
            $(activeSection).addClass('show');
        }

        // Save the active accordion section to local storage when a section is shown
        $('#accordionFlush').on('show.bs.collapse', function (e) {
            localStorage.setItem('activeAccordionSection', '#' + e.target.id);
        });

    });
</script>

<!-- Styles -->
{{--<script src="https://kit.fontawesome.com/0bb69a1b42.js" crossorigin="anonymous"></script>--}}

</body>
</html>
