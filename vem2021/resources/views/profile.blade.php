@include('layouts.header')
    <!-- Main Screen Section Start -->
    <section id="main" class="content-section transparent add">



        <div class="container-fluid p-0 fullheight">
            <div class="row no-gutters fullheight">

                <!-- About Section Info Start -->
                <div class="col-12 col-xl-6 content-section__info">

                    <div class="blocks-container">
<style>
    .section-text a{
        color: darkgray;
        font-weight: bold;
    }
</style>

                        <!-- Section Content Block Title Start -->


                        <div class="content-block" style='overflow: auto'>

                            <span class="subtitle">meu perfil</span><br><br>
                            <img id='guy-avatar' src='{{ $usr->avatar }}' />
                            <h2>{{ $usr->name }}</h2>

                            <p class="section-text" style=' overflow: visible; display: block; font-size: 20px;'>


                            </p>
                            <br><br><br><br>
                            <div class="headline__btnholder" style='padding-bottom: 40px;'>
                                <a href="/message/add" class="btn btn-l btn-gradient">
                                    <span class="btn-border"></span>
                                    <span class="btn-hover"></span>
                                    <span class="btn-caption">Criar uma nova mensagem</span>
                                </a>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

                            <br><br><br>
                            @if(count($numeros)>0)
                                <span class="subtitle">Números da Sorte ( {{count($numeros)}} )</span><br><br>
                                @foreach($numeros as $n)
                                    {{ $n->id }};
                                @endforeach
                            @endif

                        </div>


                        <!-- Section Content Block Title End -->


                    </div>
                </div>


                <!-- Section Content Block Title End -->
                <!-- About Section Media Start -->
                <div class="col-12 col-xl-6 content-section__info">
                    <div class="blocks-container" style='height: 600px; overflow: auto'>

                        @if(count($mensagens)>0)
                        @foreach($mensagens as $m)
                            <div class='item-profile-message'>
                                <h3 style='float: left; padding-right: 20px;'>{{ $m->id }}</h3>

                                <p>{{ substr($m->message,0,100)}}...</p>
                                <br>
                                <a class='link' href='/message/show/{{ $m->id }}'><b>ver mensagem</b></a>
                                <hr/>
                            </div>
                        @endforeach
                    @endif



                    </div>
                </div>
                <!-- About Section Media End -->

            </div>
        </div>


    </section>
    <!-- Main Screen Section End -->
@include('layouts.footer')
