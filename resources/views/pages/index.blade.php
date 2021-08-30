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
                  <h2>Escolha seu plano</h2>
                  <p class="texto-escuro">
                      Treine o quanto quiser com nossos planos. Todos oferecem áreas de musculação, aeróbico, aulas
                      especiais e de ginástica
                  </p>
              </div>
              <div class="row justify-center">
                  <div class="col-md-12 mb-6 pt-3 text-center">
                      <div class="row justify-center">
                          <div class="col-md-4 mt-6 my-6" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-inicio">

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

                                      <div class="">
                                          <h5 class="uppercase mb-3 mt-3 font-bold texto-verde">
                                              DIFERENCIAIS
                                          </h5>
                                          <ul>
                                              <li class="font-bold mb-6 texto-claro text-left">
                                                  Acesso ilimitado a todas áreas da academia
                                              </li>
                                              <li class="font-bold mb-6 texto-claro text-left">
                                                  Aulas de Ginástica
                                              </li>
                                              <li class="font-bold mb-6 texto-claro text-left">
                                                  Área de musculação e aeróbicos
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="plano__cta">
                                          <p>Aproveite</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-6 my-6 md:mb-0" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-smart">
                                  <div>
                                      <div class="badge badge-black">
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

                                      <div class="plano__body px-5">
                                          <p class="fz-18 mb-6">
                                              Treine o quanto quiser na sua unidade, sem taxa de cancelamento.
                                          </p>
                                          <hr class="mb-6">
                                          <div class="text-gray fz-14 fw-900 uppercase mb-3">
                                              DIFERENCIAIS
                                          </div>

                                          <p class="font-bold mb-6">
                                              Acesso ilimitado a todas áreas da academia
                                          </p>
                                          <p class="font-bold mb-6">
                                              Aulas de Ginástica
                                          </p>
                                          <p class="font-bold mb-6">
                                              Área de musculação e aeróbicos
                                          </p>
                                          <p class="font-bold mb-6">
                                              Smart Fit Go
                                          </p>
                                          <p class="font-bold mb-6">
                                              Sem taxa de cancelamento
                                          </p>
                                      </div>
                                  </div>

                                  <div>
                                      <div class="plano__cta">
                                          <p>Aproveite</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 mt-6 my-6 md:mb-0" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-smart">
                                  <div>
                                      <div class="badge badge-black">
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

                                      <div class="plano__body px-5">
                                          <p class="fz-18 mb-6">
                                              Treine o quanto quiser na sua unidade, sem taxa de cancelamento.
                                          </p>
                                          <hr class="mb-6">
                                          <div class="text-gray fz-14 fw-900 uppercase mb-3">
                                              DIFERENCIAIS
                                          </div>

                                          <p class="font-bold mb-6">
                                              Acesso ilimitado a todas áreas da academia
                                          </p>
                                          <p class="font-bold mb-6">
                                              Aulas de Ginástica
                                          </p>
                                          <p class="font-bold mb-6">
                                              Área de musculação e aeróbicos
                                          </p>
                                          <p class="font-bold mb-6">
                                              Smart Fit Go
                                          </p>
                                          <p class="font-bold mb-6">
                                              Sem taxa de cancelamento
                                          </p>
                                      </div>
                                  </div>

                                  <div>
                                      <div class="plano__cta">
                                          <p>Aproveite</p>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- ======= Team Section ======= -->
      <section id="team" class="team">
          <div class="container">
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                  <h2>Sobre</h2>
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
                                  <a href=""><i class="icofont-whatsapp" style="color: #54861f"></i></a>
                                  <a href=""><i class="icofont-youtube" style="color: #54861f"></i></a>
                                  <a href="https://www.instagram.com/dricardoarenella/">
                                      <i class="icofont-instagram" style="color: #54861f">
                                      </i>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="texto-curriculo">
                          <h3 class="title">Dr. Ricardo Roscito Arenella</h3>
                          <p class="txt1">
                              Filho de ginecologista reconhecido na região do ABC, em São Caetano do Sul, Dr.Aldo
                              Arenella (in memorian), Dr.Ricardo cresceu em meio à forte
                              influência dessa linda e honrosa profissão. Seu pai o levava para acompanhar o consultório
                              e os partos desde pequeno e a aptidão surgiu com naturalidade
                              desde então. Foi sócio herdeiro de um Hospital em São Bernardo do Campo quando chegou a
                              coordenar mais de 45 colegas especialistas de profissão na maternidade
                              que realizava na época aproximadamente 630 partos por mês. Médico muito atencioso, humano
                              e dedicado, utiliza de linguagem simples ao fácil entendimento de suas
                              pacientes e com experiência pelos mais de dois mil partos já realizados. Atualmente entre
                              as clínicas que atende, no grande ABC e São Paulo capital, integra a equipe
                              de ginecologia do Hospital São Luiz unidade Morumbi e Rede D’or Assunção.
                          </p>
                      </div>
                      <div class="texto-curriculo">
                          <h3 class="title">Mini currículo</h3>
                          <p class="txt1">
                              Formado pela faculdade de Medicina do ABC (FMABC)
                              Residência médica em Ginecologia e Obstetrícia pela FMABC
                              Especialista em Ginecologia e Obstetrícia pelo Conselho Federal de Medicina (CFM)
                              Membro da Federação Paulista de Ginecologia e Obstetrícia (FEBRASGO)
                              Pós Graduado em Medicina Estética pela Sociedade Brasileira de Medicina Estética(SBME –
                              ASIME (Internacional))
                              MBA em Gestão de Serviços de Saúde pela FGV-CEAHS
                          </p>
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
                  <h2>Portfolio</h2>
                  <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                      sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                      Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
              </div>

              <div class="row" data-aos="fade-in">
                  <div class="col-lg-12 d-flex justify-content-center">
                      <ul id="portfolio-flters">
                          <li data-filter="*" class="filter-active">All</li>
                          <li data-filter=".filter-app">App</li>
                          <li data-filter=".filter-card">Card</li>
                          <li data-filter=".filter-web">Web</li>
                      </ul>
                  </div>
              </div>

              <div class="row portfolio-container" data-aos="fade-up">

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio1.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio1.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                              <a href="" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio2.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio2.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio3.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio3.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio4.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio4.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portifolio5.png') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portifolio5.png') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery"
                                 class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                      <div class="portfolio-wrap">
                          <img src="{{ asset('/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                          <div class="portfolio-links">
                              <a href="{{ asset('/img/portfolio/portfolio-9.jpg') }}" data-gall="portfolioGallery"
                                 class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
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
                          <a href="malito:impacto.academiafitness@gmail.com" class="item-link mailto">
                              <p>impacto.academiafitness@gmail.com</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <div class="info-box mb-4">
                          <a href="tel:5511941013323">
                              <i class="bx bx-phone-call"></i>
                                <h3>Telefone</h3>
                          </a>
                            (11) 9 4101-3323
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

