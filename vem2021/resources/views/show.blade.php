@include('layouts.header')
    <!-- Main Screen Section Start -->
    <section id="main" class="content-section transparent add">



        <div class="container-fluid p-0 fullheight">
            <div class="row no-gutters fullheight">

                <!-- About Section Info Start -->
                @if($message->image)
                <div class="col-12 col-xl-6 content-section__info">
                @else
                    <div class="col-12 col-xl-12 content-section__info">
                @endif
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
                                <a href="/message/add" class="btn btn-l btn-gradient">
                                    <span class="btn-border"></span>
                                    <span class="btn-hover"></span>
                                    <span class="btn-caption">Criar uma nova</span>
                                </a>
                            </div>


                            <img id='guy-avatar' src='{{ $person->foto }}' />


                            <span class="subtitle">
                                @if($empowerment==0)
                                    ainda não foi fortalecida
                                @elseif($empowerment==1)
                                    fortalecida uma vez
                                @else
                                    fortalecida {{$empowerment}} vezes
                                @endif
                            </span>
                            <h2>{{ $person->nome }}</h2>

                            <p class="section-text" style=' overflow: visible; display: block; font-size: 20px;'>

                                {{ $message->message }}

                            </p>
                            <br><br><br><br>
                            <a id='fortalecer-link'>
                                <img src="{{URL::asset('/img/fireicon.png')}}" style='height: 24px; width: auto; float: left;'>
                                Fortalecer mensagem
                            </a>

                            <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
                            <script>
                                $(document).ready(function(){

                                    $("#fortalecer-link").click(function(){

                                       console.log('here we go');

                                       request = $.ajax({
                                           url: "/message/fortalecer/{{ $message->id }}",
                                           type: "get"
                                       });

                                       // Callback handler that will be called on success
                                       request.done(function (response, textStatus, jqXHR){
                                           // Log a message to the console
                                           console.log(response);

                                           if(response==0){
                                               $(".subtitle").html('ainda não foi fortalecida');
                                           } else if(response==1){
                                            $(".subtitle").html('fortalecida uma vez');
                                           }else {
                                            $(".subtitle").html('fortalecida '+response+' vezes');
                                            }



                                       });

                                   });
                                });
                            </script>

                        </div>


                        <!-- Section Content Block Title End -->


                    </div>
                </div>
                <!-- About Section Info End -->

                @if($message->image)

                    <!-- About Section Media Start -->
                    <div class="col-12 col-xl-6 content-section__media">
                        <!-- <div class="content-section__darkscreen"></div> -->
                        <div class="media-container">

                            <!-- About Image Start -->
                            <div class="image about-image" style='background-image: url({{$message->image}});'></div>
                            <!-- About Image End -->

                        </div>
                    </div>
                    <!-- About Section Media End -->
                @endif

            </div>
        </div>


    </section>
    <!-- Main Screen Section End -->
@include('layouts.footer')
