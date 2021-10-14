@extends ('layout')
@section ('conteudo')
  <main id="main">
      <!-- ======= About Section ======= -->


      <section class="about">
          <div class="container">

              <div class="row no-gutters" style="margin-top: -70px;">
                  <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                      <div class="content">
                          <img src="{{ asset('img/Logogreen.png') }}" class="img-fluid" data-aos-delay="0">
                      </div>
                  </div>
                  <div class="col-xl-7 d-flex align-items-stretch">
                      <div class="icon-boxes d-flex flex-column justify-content-center">
                          <div class="row">
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                  <i class="bx bxs-bolt"></i>
                                  <h4>Perder caloria é o nosso foco!</h4>
                                  <p>Temos aulas de altas tensões como zumba,
                                      ginástica aerobica e Muay Thai onde você ativa seu metabolismo e alcança resultado de forma instantânea!</p>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                  <i class="bx bx-dumbbell"></i>
                                  <h4>Resultados</h4>
                                  <p>Na nossa academia priorizamos o resultado! Sendo assim, temos disponíveis diversos equipamentos e aparelhos para variação de treinos dos nossos alunos</p>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="750">
                                  <i class="bx bx-time-five"></i>
                                  <h4>Aulas e Treinos</h4>
                                  <p>Temos aulas e treinos com horas marcadas para a facilidade e alinhamento dos nossos alunos! Consulte nossos horários de funcionamento e nossas modalidades</p>
                              </div>
                              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="1000">
                                  <i class="bx bx-cart"></i>
                                  <h4>Nossa Loja</h4>
                                  <p>temos disponíveis na nossa loja interna diversificações de WHEYs, proteínas e vitaminas para te auxiliar no seu processo de transição corporal! consulte nossas promoções.</p>
                              </div>
                          </div>
                      </div>
                      <!-- End .content-->
                  </div>
              </div>
          </div>
      </section>
      <!-- End About Section -->
      <section id="planos" class="planos section-plan">
          <div class="container">
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                  <h2 class="section-title_verde">Escolha seu plano</h2>
              </div>
              <div class="row justify-center">
                  <div class="col-md-12 mb-6 pt-3 text-center">
                      <div class="row justify-center">
                          <div class="col-md-4 mt-5 my-4 md:mb-0" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-smart h-100">
                                  <div>
                                      <div class="badge badge_black">
                                          <strong>Impacto</strong>
                                      </div>
                                      <div class="text-center py-3 card-verde">
                                          <p class="uppercase text-white  font-bold">
                                              PLANO
                                          </p>
                                          <h2 class="text-black uppercase title-escuro">
                                              BASIC
                                          </h2>
                                      </div>
                                      <div class="linha-escura">
                                          <div class="text-center text-black">
                                              <span class="text-white font-bold uppercase">
                                                A PARTIR DE
                                              </span>
                                              <br>
                                              <div
                                                  class="text-4xl font-bold text-black formatted_membership_price text-white">
                                                  R$ 75,00
                                              </div>
                                              <span class="font-bold uppercase text-black">
                                              </span>
                                          </div>
                                      </div>

                                      <div class="">
                                          <h5 class="uppercase mb-3 mt-3 font-bold texto-escuro">
                                              DIFERENCIAIS
                                          </h5>
                                          <ul class="pb-4">
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Wi-Fi liberado.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Acesso ilimitado a todas áreas da academia.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Treino 7 dias por semana.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Treinos personalizados todos os dias.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  acesso a área da musculação.
                                              </li>
                                          </ul>
                                      </div>
                                  </div>

                                  <div>
                                      <div class="plano__cta">
                                          <p></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-5 my-4 md:mb-0" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-smart h-100">
                                  <div>
                                      <div class="badge badge_black">
                                          <strong>Impacto</strong>
                                      </div>
                                      <div class="text-center py-3 card-verde">
                                          <p class="uppercase text-white  font-bold">
                                              PLANO
                                          </p>
                                          <h2 class="text-black uppercase title-escuro">
                                              FIT
                                          </h2>
                                      </div>
                                      <div class="linha-escura">
                                          <div class="text-center text-black">
                                              <span class="text-white font-bold uppercase">
                                                A PARTIR DE
                                              </span>
                                              <br>
                                              <div
                                                  class="text-4xl font-bold text-black formatted_membership_price text-white">
                                                  R$ 89,99
                                              </div>
                                              <span class="font-bold uppercase text-black">
                                              </span>
                                          </div>
                                      </div>

                                      <div class="">
                                          <h5 class="uppercase mb-3 mt-3 font-bold texto-escuro">
                                              DIFERENCIAIS
                                          </h5>
                                          <ul class="pb-4">
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Wi-Fi.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Acesso a área das aulas ginásticas coletivas.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Acesso a 2 aulas coletivas e a musculação.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Treino 7 dias podendo fazer até 10 Aulas por semana.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Treinos personalizados todos os dias.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Acesso a 2 aulas aeróbicas.
                                              </li>
                                              <li class="font-bold mb-2 titulo-claro2 text-left">
                                                  Disponibilidade de treino mais de uma vez por dia.
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-5 my-4 md:mb-0" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-inicio h-100">

                                  <div>
                                      <div class="badge">
                                          <strong>Impacto</strong>
                                      </div>
                                      <div class="text-center py-3">
                                          <p class="uppercase text-white  font-bold">
                                              PLANO
                                          </p>
                                          <h2 class="title-verde uppercase">
                                              Black
                                          </h2>
                                      </div>

                                      <div class="linha-verde">
                                          <div class="text-center text-black">
                                              <span class="text-white font-bold uppercase">
                                                A PARTIR DE
                                              </span>
                                              <br>
                                              <div class="text-4xl font-bold text-white formatted_membership_price">
                                                  R$ 99,99
                                              </div>
                                              <span class="font-bold uppercase text-black">
                                              </span>
                                          </div>
                                      </div>

                                      <div class="h-100">
                                          <h5 class="uppercase mb-3 mt-3 font-bold texto-verde">
                                              DIFERENCIAIS
                                          </h5>
                                          <ul class="pb-4">
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Wi-Fi liberado.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Acesso ilimitado a todas áreas da academia.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Treino 7 dias por semana.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Treinos personalizados todos os dias.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Acesso a todas as aulas disponíveis na academia.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Área de musculação e aeróbicos.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Disponibilidade mais de uma vez por dia de TREINO.
                                              </li>
                                              <li class="font-bold mb-2  texto-claro text-left">
                                                  Acesso a todas as dependências da academia e todas as aulas disponíveis.
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
{{--                                  <div>--}}
{{--                                      <div class="plano__cta">--}}
{{--                                          <p>Aproveite</p>--}}
{{--                                      </div>--}}
{{--                                  </div>--}}
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="section-title mt-4" data-aos="fade-in" data-aos-delay="100">
                      <h5 class="texto-escuro">Planos Recorrência* Benefícios</h5>
                      <p class="texto-escuro">
                          *O preço da mensalidade não inclui taxas de matrícula e manutenção.

                          Pagamento mensal por cartão de crédito. O preço mínimo pode variar entre os planos.

                          Sujeito a alterações sem aviso prévio. Não aceitamos cheques. As Taxas de Manutenção
                          e matrícula aparecerão no seu cartão de crédito somadas e com o nome "Taxa de Adesão".
                      </p>

                  </div>
              </div>
          </div>
      </section>
             <!-- ======= Team Section ======= -->
      <section id="team" class="team">
          <div class="container">
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                  <h2>Missão | Visão | Valores</h2>
              </div>
              <div class="row">
                  <div class="col-lg-6 col-md-6">
                      <div class="member" data-aos="fade-up" data-aos-delay="300">
                          <div class="pic">
                              <img src="{{ asset('img/img_academia.png') }}" class="img-fluid" alt="">
                          </div>
                          <div class="member-info">
                              <h4>Academia Impacto Fitness</h4>
                              <span>NOSSO OBJETIVO É O SEU RESULTADO</span>
                              <div class="social">

                                  <a href="https://api.whatsapp.com/send?phone=5511941013323"  target="_blank"><i class="icofont-whatsapp" style="color: #54861f"></i></a>
                                  <a href="https://www.youtube.com/channel/UC8zcD8YKvumXv9A07p85RyA" class="instagram"  target="_blank"><i class="icofont-youtube" style="color: #54861f"></i></a>
                                  <a href="https://www.instagram.com/grupoimpactoacademia/?hl=pt-br" target="_blank">
                                      <i class="icofont-instagram" style="color: #54861f">
                                      </i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="texto-curriculo">
                          <h3 class="title">Missão</h3>
                          <p class="txt1">
                              Atuar no setor de saúde e bem estar com qualidade e responsabilidade social.
                              ATUAR- Investir, proporcionar, fazer parcerias, capacitar.
                              ÁREA DA SAÚDE- primariamente; saúde e bem-estar, secundariamente; estética e boa forma.
                              QUALIDADE- excelência na orientação das atividades, bons equipamentos, satisfação do cliente, cumprimento das especificações.                          </p>
                      </div>
                      <div class="texto-curriculo">
                          <h3 class="title">Visão</h3>
                          <p class="txt1">
                              Consolidar-se como um dos grupos mais conceituados no setor fitness em valor de mercado, admirado pelo cliente e reconhecido pela solidez.
                          </p>
                      </div>
                      <div class="texto-curriculo">
                          <h3 class="title">Valores</h3>
                          <p class="txt1">
                              INTEGRIDADE- honrar compromissos, agir com transparência, ética e de maneira solida com o cliente.
                              ÉTICA- praticar o bem. Respeitar a dignidade das pessoas.
                              RESPONSABILIDADE SOCIAL- Suprir a necessidade do cliente com relação aos serviços oferecidos so setor de saúde, bem estar, de maneira confiável e efetiva em termos de custos, contribuindo para o desenvolvimento e assegurando melhor qualidade de vida para toda sociedade.
                              ENTUSIAMO NO TRABALHO- Agir com comprometimento, responsabilidade e dedicação.
                              ESPÍRITO EMPREENDEDOR- Tomar iniciativas, ousar e decidir, criar eventos que motivem seus clientes observando as diretrizes da empresa.                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Team Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="galeria" class="portfolio section-plan">
          <div class="container">

              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                  <h2 class="section-title_verde">Aulas e Horários</h2>
                  <h5 class="texto-escuro"></h5>
                  <p class="texto-escuro">
                      Segunda a Sexta 06h30 ás 22h. Sábado 08h ás 15h. Domingo 10h ás 14h.
                  </p>
              </div>

              <div class="row" data-aos="fade-in">
                  <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active">Todos</li>
                          <li data-filter=".filter-segunda">Segunda</li>
                          <li data-filter=".filter-terca">Terça</li>
                          <li data-filter=".filter-quarta">Quarta</li>
                          <li data-filter=".filter-quinta">Quinta</li>
                          <li data-filter=".filter-sexta">Sexta</li>
                      </ul>
                  </div>
              </div>

              <div class="row portfolio-container" data-aos="fade-up">

                  <div class="col-lg-4 col-md-6 portfolio-item filter-segunda filter-quarta">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio2.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio2.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-segunda filter-quarta">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio5.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio5.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-terca filter-quinta">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio3.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio3.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-terca filter-quinta">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio1.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio1.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                              <a href="" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-quarta filter-sexta ">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio4.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio4.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>



              </div>

          </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
          <div class="container">
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                  <h2>Contato</h2>
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-6">
                      <div class="info-box mb-4">
                          <i class="bx bx-map"></i>
                          <h3>Endereço</h3>
                          <p>R. Avaré - Jardim Angela, Embu das Artes - SP</p>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="info-box  mb-4">
                          <i class="bx bx-envelope"></i>
                          <h3>E-mail</h3>
                          <a href="malito:impactoacademiafitness@gmail.com" class="item-link mailto">
                              <p>impacto.academiafitness@gmail.com</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="info-box mb-4">
                          <a href="tel:5511941013323">
                              <i class="bx bx-phone-call"></i>
                                <h3>Telefone</h3>
                              <p>(11) 9 4101-3323</p>
                          </a>

                      </div>
                  </div>
              </div>
              <div class="row" data-aos="fade-up" data-aos-delay="200">
                  <div class="col-lg-6 ">
                      <iframe class="mb-4 mb-lg-0"
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.049395226979!2d-46.80605138506835!3d-23.674191484627034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce531831951c55%3A0x3b7403e06d37c44d!2sACADEMIA%20IMPACTO%20FITNESS!5e0!3m2!1spt-BR!2sbr!4v1630079288500!5m2!1spt-BR!2sbr"
                              frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                  </div>
                  <div class="col-lg-6">
                      <form action="{{ route('envio-email') }}" method="post" role="form" class="php-email-form">
                          @csrf
                          <div class="form-row">
                              <div class="col-md-6 form-group">
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome"
                                         data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                  <div class="validate"></div>
                              </div>
                              <div class="col-md-6 form-group">
                                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"
                                         data-rule="email" data-msg="Please enter a valid email"/>
                                  <div class="validate"></div>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="col-md-12 form-group">
                                  <select class="form-control"name="plano" id="plano">
                                      <option disabled selected style="display: none;" value="">Planos</option>
                                      <option value="black">Black</option>
                                      <option value="fit">Fit</option>
                                      <option value="basic">Basic</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required"
                                        data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                              <div class="validate"></div>
                          </div>
                          <div class="mb-3">
                              <div class="loading">Carregando</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                          </div>
                          <div class="text-center">
                              <button type="submit">Enviar mensagem</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </section>
      <!-- End Contact Section -->

  </main>
  <!-- End #main -->
@endsection

