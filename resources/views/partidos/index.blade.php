@extends('layouts.app_login')

@section('content')
    {{--<h1>Partidos del dia</h1>
    @foreach($partidos as $partido)
        <h2>{{$partido->id}}</h2>
    @endforeach--}}

            <!-- Page Title
		============================================= -->
        <section id="page-title" style="background-color: #FFA200">

            <div class="container clearfix">
                <h1>PARTIDOS DE LA JORNADA</h1>

            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="clearfix">
                    <!-- Sidebar
                    ============================================= -->
                    <div class="col_one_fifth  nobottommargin clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div id="menu_lateral">

                                <ul class="menu_lateral">
                                    <li class="item1"><a href="#">Futbol <span>4</span></a>
                                        <ul>
                                            <li class="subitem1"><a href="#">Liga española</a></li>
                                            <li class="subitem2"><a href="#">Premier lague </a></li>
                                            <li class="subitem3"><a href="#">Champions league</a></li>
                                            <li class="subitem3"><a href="#">Europa league</a></li>
                                        </ul>
                                    </li>
                                    <li class="item2"><a href="#">Baloncesto <span>3</span></a>
                                        <ul>
                                            <li class="subitem1"><a href="#">ACB <span>14</span></a></li>
                                            <li class="subitem2"><a href="#">NBA<span>6</span></a></li>
                                            <li class="subitem3"><a href="#">NACCA<span>2</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="item3"><a href="#">Tenis <span>4</span></a>
                                        <ul>
                                            <li class="subitem1"><a href="#">Roland Garros </a></li>
                                            <li class="subitem2"><a href="#">Wimbledon </a></li>
                                            <li class="subitem3"><a href="#">OPEN Australia </a></li>
                                            <li class="subitem3"><a href="#">US OPEN</a></li>
                                        </ul>
                                    </li>
                                    <li class="item4"><a href="#">Beisbol<span>1</span></a>
                                        <ul>
                                            <li class="subitem1"><a href="#">LMB</a></li>

                                        </ul>
                                    </li>
                                    <li class="item5"><a href="#">Hokey <span>1</span></a>
                                        <ul>
                                            <li class="subitem1"><a href="#">NFL </a></li>

                                        </ul>
                                    </li>
                                </ul>

                            </div>




                        </div>
                    </div><!-- .sidebar end -->

                    <!-- Post Content
                    ============================================= -->
                    <div class="col_three_fifth nobottommargin clearfix" >
                        <div style="margin-top: 10px">

                            <div class="partidos black partidos_large">Valencia <span>3.20</span></div>
                            <div class="partidos black partidos_medium">X<span>2.66</span></div>
                            <div class="partidos black partidos_large">Barcelona<span>1.3</span></div>

                        </div>



                    </div><!-- .postcontent end -->

                        <!-- Sidebar
                                  ============================================= -->
                        <div class="col_one_fifth nobottommargin col_last clearfix">
                            <div class="sidebar-widgets-wrap">

                                <div id="menu_lateral">

                                    <ul class="menu_lateral">
                                        <li class="item1"><a href="#">Mis apuestas simples<span>340</span></a>
                                            <ul>
                                                <li class="subitem1"><a href="#">Cute Kittens <span>14</span></a></li>
                                                <li class="subitem2"><a href="#">Strange “Stuff” <span>6</span></a></li>
                                                <li class="subitem3"><a href="#">Automatic Fails <span>2</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item1"><a href="#">Mis apuestas combinadas<span></span></a>
                                            <ul>
                                                <li class="subitem1"><a href="#">Cute Kittens <span>14</span></a></li>
                                                <li class="subitem2"><a href="#">Strange “Stuff” <span>6</span></a></li>
                                                <li class="subitem3"><a href="#">Automatic Fails <span>2</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="item1"><a href="#">Cupon<span></span></a>
                                            <ul>

                                            </ul>
                                        </li>

                                    </ul>

                                </div>




                            </div>
                        </div><!-- .sidebar end -->


                </div>

            </div>

        </section><!-- #content end -->


@endsection
