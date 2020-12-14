@include('layouts.header')
    <!-- Main Screen Section Start -->
    <section id="main" class="content-section transparent add">



        <div class="container-fluid p-0 fullheight">
            <div class="row no-gutters fullheight">

                <!-- About Section Info Start -->
                    <div class="col-12 col-xl-12 content-section__info">
                    <div class="blocks-container">
<style>
    .section-text a{
        color: darkgray;
        font-weight: bold;
    }
</style>

                        <!-- Section Content Block Title Start -->


                        <div class="content-block" style='overflow: auto'>

                            <div class="headline__btnholder" style='padding-bottom: 40px;'>
                                <a href="/mensagens/add" class="btn btn-l btn-gradient">
                                    <span class="btn-border"></span>
                                    <span class="btn-hover"></span>
                                    <span class="btn-caption">Criar uma nova</span>
                                </a>
                            </div>



                        <div class='messages-container' style='height: 800px; overflow: auto'>
                            @foreach($messages as $m)
                                <div class='message-item' id='mitem{{ $m->id }}' style='padding-top: 80px;'>
                                    <img id='guy-avatar' src='{{ $m->foto }}' />


                                    <span class="subtitle">
                                        @if($m->empowerments==0)
                                            ainda não foi fortalecida
                                        @elseif($m->empowerments==1)
                                            fortalecida uma vez
                                        @else
                                            fortalecida {{$m->empowerments}} vezes
                                        @endif
                                    </span>
                                    <h2>{{ $m->nome }}</h2>

                                    <p class="section-text" style=' font-size: 20px;'>

                                        @if($m->image)
                                            <img src='{{$m->image}}' style='float: right; width: 96px; height: auto;'>
                                        @endif
                                        {{ $m->message }}


                                    </p>
                                    <br><br>
                                    <a class='fortalecer-link' data-id='{{ $m->id }}'>
                                        <img src="{{URL::asset('/img/fireicon.png')}}" style='height: 24px; width: auto; float: left;'>
                                        Fortalecer mensagem
                                    </a>
|
                                    <a href='/message/show/{{ $m->id }}' style='color: white'>
                                        Ver mensagem
                                    </a>

                                    <hr/>
                                </div>
                            @endforeach
                        </div>


                        </div>
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                        <script>
                            $(document).ready(function(){

                                $(".fortalecer-link").click(function(){

                                    request = $.ajax({
                                        url: "/message/fortalecer/"+$(this).data('id'),
                                        type: "get"
                                    });

                                    var id = $(this).data('id');

                                    // Callback handler that will be called on success
                                    request.done(function (response, textStatus, jqXHR){
                                        // Log a message to the console

                                        if(response==0){
                                            $("#mitem"+id+" .subtitle").html('ainda não foi fortalecida');
                                        } else if(response==1){
                                            $("#mitem"+id+" .subtitle").html('fortalecida uma vez');
                                        }else {
                                            $("#mitem"+id+" .subtitle").html('fortalecida '+response+' vezes');
                                        }



                                    });

                                });
                            });
                        </script>
                        <!-- Section Content Block Title End -->


                    </div>
                </div>
                <!-- About Section Info End -->


            </div>
        </div>


    </section>
    <!-- Main Screen Section End -->
@include('layouts.footer')
