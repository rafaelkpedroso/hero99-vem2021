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
                            <span class="subtitle">CONTA PRA GENTE</span>
                            <h2>Algo sobre sua expectativa pra 2021</h2>

                            <p class="section-text" style=' overflow: visible; display: block; font-size: 20px;'>

                                Pode ser qualquer coisa. <br/>
                                Vale fazer um voto, manifestar um desejo... e por aí vai. <br/><br/>

                                E pode zoar? <br/>Pode. A vida é curta demais pra nos levarmos a sério o tempo todo...<br/>
                                Só não esqueça <a href='https://www.youtube.com/watch?v=AtGys4WYA5k&t=3s' target='_blank'>destas palavras de sabedoria.</a>;
                                afinal, é natal, amigos... <b>;)</b>

                            </p>
                            <br><br><br><br>


                            <form id='add-message'
                                  name='add-message'
                                  enctype='multipart/form-data'
                                  method='post'
                                  class='form writealine-form form-light'>

                                {{ csrf_field() }}

                                <textarea name='message' id='message' required placeholder='Escreva sua mensagem aqui*' maxlength='3000'></textarea>
                                <span class="inputs-description">*Obrigatório, max 3000 chars</span>

                                <input type='file' id='foto' name='foto' accept="image/x-png,image/gif,image/jpeg" placeholder='Imagem'>
                                <span class="inputs-description">Opcional, 1200x1200</span>

                                <button class="btn btn-l btn-gradient">
                                    <span class="btn-border"></span>
                                    <span class="btn-hover"></span>
                                    <span class="btn-caption">Enviar</span>
                                </button>

                            </form>
                        </div>


                        <!-- Section Content Block Title End -->


                    </div>
                </div>
                <!-- About Section Info End -->

                <!-- About Section Media Start -->
                <div class="col-12 col-xl-6 content-section__media">
                    <!-- <div class="content-section__darkscreen"></div> -->
                    <div class="media-container">

                        <!-- About Image Start -->
                        <div class="image about-image" style='background-image: url({{URL::asset('/img/AdobeStock_228318212.jpeg')}});'></div>
                        <!-- About Image End -->

                    </div>
                </div>
                <!-- About Section Media End -->

            </div>
        </div>


    </section>
    <!-- Main Screen Section End -->
@include('layouts.footer')
