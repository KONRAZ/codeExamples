<?php ?>

<?php echo $this->renderPartial($this->landingViewPath . '_header'); ?>
<div class="box-1" id="box-1" style="background-image: url(../img/nevskiy/krasnogvardeiskiy_region/box-1-bg-kr.png)">
    <div class="container">
        <div class="title-block">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="title center-block">
                    <span>Красногвардейский район</span>
                  </h1>
              </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h1 class="subtitle center-block">
                <span>
                  <a href="tel:+79218728127">8 (921) 872-81-27</a>
                </span>
              </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <h1 class="about">
                <!-- <a href="/about">Подробнее о районе</a> -->
              </h1>
            </div>
          </div>
        </div>
    </div>
</div>
<div class="box-3" id="box-3">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-12">
                <h3 class="text-center">
                    <span>ОБРАЩАЙТЕСЬ В ОДИН <br> ИЗ НАШИХ ОФИСОВ</span>
                </h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-4 col-12">
                <a href="/indexKrasngv/new" >
                    <div class="object">
                        <img src="/img/nevskiy/krasnogvardeiskiy_region/new.png" alt="">
                        <div class="head">
                            <span>Новостройки</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-12">
                <a href="/indexKrasngv/home" >
                    <div class="object">
                        <img src="/img/nevskiy/krasnogvardeiskiy_region/second.png" alt="">
                        <div class="head">
                            <span>Вторичная недвижимость</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-12">
                <a href="/indexKrasngv/rent">
                    <div class="object">
                        <img src="/img/nevskiy/krasnogvardeiskiy_region/rent.png" alt="">
                        <div class="head">
                            <span>Аренда жилой недвижимости</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-12">
                <a href="#" data-dest=".box-4">
                    <div class="object">
                        <img src="/img/nevskiy/krasnogvardeiskiy_region/country.png" alt="">
                        <div class="head">
                            <span>Загородная недвижимость</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-12">
                  <a href="#" data-dest=".box-4">
                    <div class="object">
                        <img src="/img/nevskiy/krasnogvardeiskiy_region/commerce.png" alt="">
                        <div class="head">
                            <span>Коммерческая недвижимость</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-12">
                <a href="#" data-dest=".box-4">
                    <div class="object">
                        <img src="/img/nevskiy/krasnogvardeiskiy_region/pereustup.png" alt="">
                        <div class="head">
                            <span>Переуступки</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <h4>Для получения подробной информации оращайтесь</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="contacts justify-content-center">
              <span class="chats mr-2">
                  <? $this->renderPartial('messangers') ?>
              </span>
              <a href="tel:+79218670757">
                <span class="phone fc-orange font-weight-bold">8 (921) 872-81-27</span>
              </a>
            </div>
          </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-12">
                <h3 class="text-center">
                    <span>ОСТАВИТЬ ЗАЯВКУ</span>
                </h3>
            </div>
        </div>
    </div>
</div>

<div class="box-4" style="background-image: url(../img/nevskiy/krasnogvardeiskiy_region/box-4-bg-kr.png)">
    <div class="container pt-5">
        <div class="row pb-5">
            <div class="col-lg-8 offset-lg-2 pb-5">
                <form class="form mt-3" id="request-form">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="block">
                            <label class="label ">
                                <span>Выберите офис:</span>
                                <select name="region">
                                    <option>Красногвардейский</option>
                                    <option>Невский</option>
                                </select>
                            </label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block">
                                <label class="label ">
                                    <span>Как вас зовут</span>
                                    <input name="name" type="text" class="form-control" required>
                                </label>
                            </div>
                            <div class="block">
                                <label class="label ">
                                    <span>Ваш телефон</span>
                                    <input name="phone" type="text" class="form-control" required>
                                </label>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="block">
                                <label class="label ">
                                    <span>Ваша почта</span>
                                    <input name="email" type="email" class="form-control">
                                </label>
                            </div>
                            <div class="block">
                                <label class="label ">
                                    <span>Вопрос обращения</span>
                                    <select name="type">
                                        <option>Вторичное жилье</option>
                                        <option>Аренда</option>
                                        <option>Новостройки</option>
                                        <option>Загородная недвижимость</option>
                                        <option>Коммерческая недвижимость</option>
                                        <option>Переуступки</option>
                                        <option>Расселение коммунальных квартир</option>
                                        <option>Ипотека, субсидии</option>
                                        <option>Элитная недвижимость</option>
                                        <option>Трудоустройство</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <label>
                                    <span>Сообщение</span>
                                    <textarea name="message" class="form-control" rows="5" required></textarea>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <button type="button" onclick="nevskiy.submitForm('#request-form')" class="btn btn-danger btn-big">
                                    <span>Оставить заявку</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
    </div>
</div>

<div class="box-5">
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-12">
        <h3 class="text-center">
          <span>
            Наши вакансии <br>по направлениям
          </span>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-second-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="true">Вторичная недвижимость</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-new-tab" data-toggle="pill" href="#pills-new" role="tab" aria-controls="pills-new" aria-selected="false">Новое строительство</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-rent-tab" data-toggle="pill" href="#pills-rent" role="tab" aria-controls="pills-rent" aria-selected="false">Аренда жилой недвижимости</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
            <span class="tab-title">
              Агент по недвижимости – Риэлтор (без опыта работы)<br><br>
            </span>
            <span class="tab-text">
              Приглашаем новичков освоить профессию «Риэлтора – агента по недвижимости»<br><br>

              Обучение проводят опытные эксперты, юристы и бизнес - тренеры<br><br>
              <strong>Требования: </strong>
              <ul>
                <li>Ответственность</li>
                <li>Коммуникабельность</li>
                <li>Грамотная речь</li>
                <li>Активная жизненная позиция</li>
                <li>Желание освоить новую профессию</li>
                <li>Прохождение обучения в учебном центре компании</li>
                <li>Аккуратность в оформлении документов</li>
                <li>Нацеленность на финансовый результат</li>
              </ul>
              <br>
              <strong>Обязанности:</strong>
              <ul>
                <li>Консультирование клиентов, по оказании услуг в сфере вторичного рынка недвижимости (покупка‚ продажа‚ обмен, расселение)</li>
                <li>Организация просмотров и показов объектов недвижимости</li>
                <li>Подбор оптимального варианта жилья для клиента</li>
                <li>Подготовка и проведение сделок с недвижимостью</li>
                <li>Сопровождение клиента от начала до завершения сделки</li>
              </ul>
              <br>
              <strong>Условия:</strong>
               <ul>
                 <li>График собственного планирования работы</li>
                 <li>Возможность карьерного роста </li>
                 <li>Достойный заработок, только % от сделок</li>
                 <li>На первых сделках сопровождение опытного наставника</li>
                 <li>Дружный и успешный коллектив </li>
                 <li>Информационная, юридическая и рекламная поддержка </li>
                 <li>Удобный офис рядом со ст. метро Проспект Большевиков</li>
               </ul>
               <br>
               <strong>Ждем Вас в нашем офисе:</strong>
               <ul>
                 <li>Невский район, ул. Коллонтай, 28/1, ст. м. пр. Большевиков (10 минут пешком)</li>
                 <li>Обучение в учебном центре компании </li>
               </ul>
               <br>
            </span>
          </div>
          <div class="tab-pane fade" id="pills-new" role="tabpanel" aria-labelledby="pills-new-tab">
            <span class="tab-title">
              Агент по продаже объектов нового строительства<br><br>
            </span>
            <span class="tab-text">
              В отдел нового строительства требуются специалисты. Работа с входящими обращениями клиентов компании.
              Подбор квартир, проведение встреч с клиентами в офисе, выезд на объекты. <br><br>


              <strong>Требования: </strong>
              <ul>
                <li>Активная жизненная позиция</li>
                <li>Коммуникабельность</li>
                <li>Грамотная речь</li>
                <li>Умение ставить перед собой цели и добиваться результатов</li>
              </ul>
              <br>
              <strong>Обязанности:</strong>
              <ul>
                <li>Работа с обращениями клиентов</li>
                <li>Проведение встреч с клиентами</li>
                <li>Подбор квартир</li>
                <li>Выезд на объекты</li>
              </ul>
              <br>
              <strong>Условия:</strong>
               <ul>
                 <li>Дежурство в офисе</li>
                 <li>График дежурств сменный</li>
               </ul>
               <br>
               <strong>Оплата:</strong>
                <ul>
                  <li>% от сделки</li>
                </ul>
                <br>
               <strong>Ждем Вас в нашем офисе:</strong>
               <ul>
                 <li>Невский район, ул. Коллонтай, 28/1, ст. м. пр. Большевиков (10 минут пешком)</li>
               </ul>
               <br>
            </span>
          </div>
          <div class="tab-pane fade" id="pills-rent" role="tabpanel" aria-labelledby="pills-rent-tab">
            <span class="tab-title">
              Агент по аренде жилой недвижимости<br><br>
            </span>
            <span class="tab-text">
              Приглашаем на работу агентов и стажеров, с опытом работы и без, в отдел аренды жилой недвижимости<br><br>

              <strong>Требования: </strong>
              <ul>
                <li>Активная жизненная позиция</li>
                <li>С опытом и без</li>
                <li>Грамотная речь</li>
                <li>Ответственность</li>
                <li>Целеустремленность</li>
                <li>Желание работать и зарабатывать</li>
              </ul>
              <br>
              <strong>Условия работы:</strong>
               <ul>
                 <li>Работа в крупной компании</li>
                 <li>Свободный график</li>
                 <li>Разъездной характер работы</li>
                 <li>Оплата - % от сделки</li>
                 <li>Рекламная поддержка</li>
                 <li>Дружный коллектив</li>
                 <li>Обучение по направлению «Агент по аренде недвижимости»</li>
               </ul>
               <br>
              <strong>Обязанности:</strong>
              <ul>
                <li>Консультирование клиентов</li>
                <li>Подписание договоров</li>
                <li>Проведение просмотров и показов объектов</li>
                <li>Дежурства в офисе</li>
              </ul>
              <br>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

    </div>
  </div>
</div>

<div class="box-6" id="box-6">
  <div class="container">
    <div class="row my-4">
      <div class="col-lg-12">
        <h4 class="text-center text-uppercase">
          <span>
            Звоните или отправьте заявку любому из наших менеджеров направления "вторичной недвижимости"
          </span>
        </h4>
      </div>
    </div>
    <div class="row pb-5">
        <div class="col-2 col-lg-1">
            <div class="arrow left" id="agent-prev-arrow1">
                <img src="/img/nevskiy/icons/left.png" alt="">
            </div>
        </div>
        <div class="col-8 col-lg-10">
            <div class="row" id="agent-slider1">

              <?php
                $agentLists = include __DIR__ . '/_managers.php';
                $agentList = $agentLists['krasnogv'];
                foreach ($agentList as $item) :
                  ?>

                <div class="col-lg-3 text-center <?php if ($item['tag']!=''){echo $item['tag'];} ?>">
                    <div class="photo">
                        <img src="/img/nevskiy/sotrudniki/krasnogvardeiskiy_region/<?php echo $item['photo'] ?>.jpg">
                    </div>
                    <div class="special">
                      <?php switch ($item['tag']) :
                        case 'new' : ?>
                        <span>Новое строительство</span>
                        <?php break; ?>
                        <?php case 'second': ?>
                        <span>Жилой фонд</span>
                        <?php break; ?>
                        <?php case 'rent': ?>
                        <span>Аренда</span>
                        <?php break; ?>
                        <?php default:?>
                        <?php break; ?>
                      <?php endswitch; ?>
                    </div>
                    <!-- <div class="email">
                        <a href="mailto:<?php //echo $item['email'] ?>"><?php //echo $item['email'] ?></a>
                    </div> -->
                    <div class="phone">
                        <span><?php echo $item['phone'] ?></span>
                    </div>
                    <div class="name">
                        <span><?php echo $item['fio'] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-2 col-lg-1">
            <div class="arrow right" id="agent-next-arrow1">
                <img src="/img/nevskiy/icons/right.png" alt="">
            </div>
        </div>
    </div>
    <div class="row my-4">
      <div class="col-lg-12">
        <h3 class="text-center">
          <span>
            Наши специалисты по направлениям
          </span>
        </h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="nav nav-pills mb-3" id="filter-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="filter-second" data-toggle="pill" href="#filter-second" role="tab" aria-controls="filter-second" aria-selected="true">Вторичная недвижимость</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="filter-new" data-toggle="pill" href="#filter-new" role="tab" aria-controls="filter-new" aria-selected="false">Новое строительство</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="filter-rent" data-toggle="pill" href="#filter-rent" role="tab" aria-controls="filter-rent" aria-selected="false">Аренда жилой недвижимости</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row pb-5">
        <div class="col-2 col-lg-1">
            <div class="arrow left" id="agent-prev-arrow2">
                <img src="/img/nevskiy/icons/left.png" alt="">
            </div>
        </div>
        <div class="col-8 col-lg-10">
            <div class="row" id="agent-slider2" >
              <?php
                $agentLists = include __DIR__ . '/_employees.php';
                $agentList = $agentLists['krasnogv'];
                foreach ($agentList as $item) :
                  ?>

                <div class="col-lg-3 text-center <?php echo $item['tag'] ?>">
                    <div class="photo">
                        <img src="/img/nevskiy/sotrudniki/krasnogvardeiskiy_region/<?php echo $item['photo'] ?>.jpg">
                    </div>
                    <div class="special">
                      <?php switch ($item['tag']) :
                        case 'new' : ?>
                        <span>Новое строительство</span>
                        <?php break; ?>
                        <?php case 'second': ?>
                        <span>Вторичная недвижимость</span>
                        <?php break; ?>
                        <?php case 'rent': ?>
                        <span>Аренда</span>
                        <?php break; ?>
                      <?php endswitch; ?>
                    </div>
                    <!-- <div class="email">
                        <a href="mailto:<?php //echo $item['email'] ?>"><?php //echo $item['email'] ?></a>
                    </div> -->
                    <div class="name">
                        <span><?php echo $item['fio'] ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-2 col-lg-1">
            <div class="arrow left" id="agent-next-arrow2">
                <img src="/img/nevskiy/icons/right.png" alt="">
            </div>
        </div>
    </div>
  </div>
</div>

<?php echo $this->renderPartial($this->landingViewPath . '_footer'); ?>

<script type="text/javascript">
    var nevskiy;
    $(document).ready(function() {
        nevskiy = new nevskiyIndex();
    })
</script>
