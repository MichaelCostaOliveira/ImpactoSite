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
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="bx bx-dumbbell"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="750">
                  <i class="bx bx-time-five"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="1000">
                  <i class="bx bx-cart"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div>
            <!-- End .content-->
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

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
                <img src="{{ asset('img') }}/Ricardo.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Dr Ricardo Roscito Arenella</h4>
                <span>crm 109993</span>
                <div class="social">
                <a href=""><i class="icofont-whatsapp" style="color: #621b13"></i></a>
                <a href=""><i class="icofont-youtube" style="color: #621b13"></i></a>
                  <a href="https://www.instagram.com/dricardoarenella/"><i class="icofont-instagram" style="color: #621b13"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="texto-curriculo">
              <h3 class="title">Dr. Ricardo Roscito Arenella</h3>
              <p class="txt1">
                Filho de ginecologista reconhecido na região do ABC, em São Caetano do Sul, Dr.Aldo Arenella (in memorian), Dr.Ricardo cresceu em meio à forte
                 influência dessa linda e honrosa profissão. Seu pai o levava para acompanhar o consultório e os partos desde pequeno e a aptidão surgiu com naturalidade
                 desde então. Foi sócio herdeiro de um Hospital em São Bernardo do Campo quando chegou a coordenar mais de 45 colegas especialistas de profissão na maternidade
                 que realizava na época aproximadamente 630 partos por mês. Médico muito atencioso, humano e dedicado, utiliza de linguagem simples ao fácil entendimento de suas
                 pacientes e com experiência pelos mais de dois mil partos já realizados. Atualmente entre as clínicas que atende, no grande ABC e São Paulo capital, integra a equipe
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
                Pós Graduado em Medicina Estética pela Sociedade Brasileira de Medicina Estética(SBME – ASIME (Internacional))
                MBA em Gestão de Serviços de Saúde pela FGV-CEAHS
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!-- End Team Section -->
    <section id="planos" class="planos section-plan">
          <div class="container">
              <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                  <h2>Escolha seu plano</h2>
                  <p class="texto-escuro">
                      Treine o quanto quiser com nossos planos. Todos oferecem áreas de musculação, aeróbico, aulas especiais e de ginástica
                  </p>
              </div>
              <div class="row justify-center">
                  <div class="col-md-9 mb-6 pt-3 text-center">
                      <div class="row justify-center">
                          <div class="col-md-5 mt-6 my-6" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-inicio">
                                  <div>
                                      <div class="text-center py-4">
                                          <p class="uppercase text-white  font-bold">
                                              PLANO
                                          </p>
                                          <h2 class="title-verde uppercase">
                                              IMPACTO Black
                                          </h2>
                                      </div>

                                      <div class="linha-verde">
                                          <div class="text-center text-black">
                                              <span class="text-white font-bold uppercase">
                                                A PARTIR DE
                                              </span>
                                              <br>
                                              <div class="text-4xl font-bold text-white formatted_membership_price">
                                                  R$ 99,90
                                              </div>
                                              <span class="font-bold uppercase text-black">
                                              </span>
                                          </div>
                                      </div>

                                      <div class=" px-5">
                                          <hr class="mb-6">
                                          <div class="fw-900 uppercase mb-3 font-bold ">
                                              DIFERENCIAIS
                                          </div>
                                          <ul>
                                              <li>
                                                  <p class="font-bold mb-6 text-white">
                                                      Acesso ilimitado a todas áreas da academia
                                                  </p>
                                              </li>
                                              <li>
                                                  <p class="font-bold mb-6 text-white">
                                                      Aulas de Ginástica
                                                  </p>
                                              </li>
                                              <li>
                                                  <p class="font-bold mb-6 text-white">
                                                      Área de musculação e aeróbicos
                                                  </p>
                                              </li>
                                              <li>
                                                  <p class="font-bold mb-6 text-white">
                                                      Smart Fit Go
                                                  </p>
                                              </li>
                                              <li>
                                                  <p class="font-bold mb-6 text-white">
                                                      Acesso ilimitado às demais unidades da rede**
                                                  </p>
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
                          <div class="col-md-5 mt-6 my-6 md:mb-0" data-aos="fade-up" data-aos-delay="100">
                              <div class="plano-smart">
                                  <div>
                                      <div class="text-center py-4 card-verde">
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
                                              <div class="text-4xl font-bold text-black formatted_membership_price text-white">
                                                  R$ 109,90
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
              <p>Av. Caminho do Mar, 1850 - Rudge Ramos, São Bernardo do Campo - SP</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>E-mail</h3>
              <p>contato@drricardoarenella.com.br</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Telefone</h3>
              <p>(11) 2808-2108</p>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://maps.google.com/maps?q=Av.%20Caminho%20do%20Mar,%201850%20-%20Rudge%20Ramos,%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP,%2009610-000&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensagem</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->
@endsection

