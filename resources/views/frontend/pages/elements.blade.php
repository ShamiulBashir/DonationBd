@extends('frontend.master')

@section('homeContent')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Elements</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="container">
        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Buttons</h2>
                </header>

                <div class="entry-content elements-container">
                    <a href="#" class="btn gradient-bg">Contact us</a>
                    <a href="#" class="btn orange-border">Contact us</a>
                    <a href="#" class="btn">Contact us</a>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Accordion & Tabs</h2>
                </header>

                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="accordion-wrap type-accordion">
                                <h3 class="entry-title d-flex justify-content-between align-items-center active">Curabitur venenatis efficitur lotrem sed tempor<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>

                                <h3 class="entry-title d-flex justify-content-between align-items-center">Nullam vestibulum convallis risus vel condimentum<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>

                                <h3 class="entry-title d-flex justify-content-between align-items-center">Vestibulum convallis risus vel condimentum<span class="arrow-r"></span></h3>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="tabs">
                                <ul class="tabs-nav d-flex">
                                    <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_1">Curabitur venen</li>
                                    <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_2">Nullam vestib</li>
                                    <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_3">Vestibulum con</li>
                                </ul>

                                <div class="tabs-container">
                                    <div id="tab_1" class="tab-content">
                                        <p>Vestibulum eget lacus at mauris sagittis varius. Etiam ut venenatis dui. Nullam tellus risus, pellentesque at facilisis et, scelerisque sit amet metus. Duis vel semper turpis, ac tempus libero. Maecenas id ultrices risus. Aenean nec ornare ipsum, lacinia volutpat urna. Maecenas ut aliquam purus, quis sodales dolor.</p>
                                    </div>

                                    <div id="tab_2" class="tab-content">
                                        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                                    </div>

                                    <div id="tab_3" class="tab-content">
                                        <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Milestones</h2>
                </header>

                <div class="milestones">
                    <div class="row flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Children helped</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="79" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="253" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="images/olive.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="174" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Causes Solved</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Loaders</h2>
                </header>

                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_1">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Hard Work</h3>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_2">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Pure Love</h3>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_3">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Smart Ideas</h3>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <div class="circular-progress-bar">
                                <div class="circle" id="loader_4">
                                    <strong class="d-flex justify-content-center"></strong>
                                </div>

                                <h3 class="entry-title">Good Decisions</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row elements-wrap">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Icon Boxes</h2>
                </header>

                <div class="entry-content elements-container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box active">
                                <figure class="d-flex justify-content-center">
                                    <img src="images/hands-gray.png" alt="">
                                    <img src="images/hands-white.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Become a Volunteer</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <figure class="d-flex justify-content-center">
                                    <img src="images/donation-gray.png" alt="">
                                    <img src="images/donation-white.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Dance & Music</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                            <div class="icon-box">
                                <figure class="d-flex justify-content-center">
                                    <img src="images/charity-gray.png" alt="">
                                    <img src="images/charity-white.png" alt="">
                                </figure>

                                <header class="entry-header">
                                    <h3 class="entry-title">Online Conference</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 96px"></div>

    @endsection