<?php ?>

<?php echo $this->renderPartial($this->landingViewPath . '_header'); ?>
<div class="box-1" id="box-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title center-block f-18"><span>Итака Невский
                </span></h1>
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
        <div class="row mt-5">
            <div class="col-lg-6 col-12">
              <a href="/indexNevskiy">
                <div class="office-block">
                  <div class="w-100 d-relative">
                    <img class="office-img" src="/img/nevskiy/nevskiy-office-img.png" alt="office-img">
                  </div>
                  <div class="title">
                    <h2 class="mb-5 pl-3 pt-3">Невский район</h2>
                  </div>
                  <div class="address-block col-lg-8 pl-3">
                    <span class="address">ул. Коллонтай, д. 28, корп. 1</span>
                    <div class="metro mb-3">
                      <img class="metro-icon" src="/img/nevskiy/metro-icon.png" alt="metro-icon">
                      <span class="metro-name">&#171;Проспект Большевиков&#187;</span>
                    </div>
                    <div class="timetable mb-3">
                      <span>
                        Пн-Пт 10:00 - 21:00 <br>
                        Сб 11:00 - 18:00 <br>
                        Вс 12:00 - 18:00 <br>
                      </span>
                    </div>
                  </div>
                  <div class="contacts pl-3 pb-3">
                    <span class="chats mr-2">
                        <? $this->renderPartial('messangers') ?>
        						</span>
                    <span class="phone fc-orange font-weight-bold">8 (921) 095-26-45</span>
                  </div>
                  <div class="region-img">
                    <img class="metro-icon" src="/img/nevskiy/nevskiy-img.png" alt="region-img">
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-12">
              <a href="/indexKrasngv">
                <div class="office-block">
                  <div class="w-100 d-relative">
                    <img class="office-img" src="/img/nevskiy/krasnogvardeiskiy-office-img.png" alt="office-img">
                  </div>
                  <div class="title">
                    <h2 class="pl-3 pt-3">Красногвардейский<br>район</h2>
                  </div>
                  <div class="address-block col-lg-8 pl-3">
                    <span class="address">ул. Осипенко, д. 2</span>
                    <div class="metro mb-3">
                      <img class="metro-icon" src="/img/nevskiy/metro-icon.png" alt="metro-icon">
                      <span class="metro-name">&#171;Ладожская&#187;</span>
                    </div>
                    <div class="timetable mb-3">
                      <span>
                        Пн-Пт 10:00 - 21:00 <br>
                        Сб-Вс 11:00 - 16:00 <br>
                        <br>
                      </span>
                    </div>
                  </div>
                  <div class="contacts pl-3 pb-3">
                    <span class="chats mr-2">
                        <? $this->renderPartial('messangers') ?>
        						</span>
                    <span class="phone fc-orange font-weight-bold">8 (921) 872-81-27</span>
                  </div>
                  <div class="region-img">
                    <img class="metro-icon" src="/img/nevskiy/krasnogvardeyskiy-img.png" alt="region-img">
                  </div>
                </div>
              </a>
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

<div class="box-4">
    <div class="container pt-5">
        <div class="row pb-5">
            <div class="col-lg-8 offset-lg-2 pb-5">
                <form class="form mt-3" id="request-form">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="block">
                            <label class="label ">
                                <span>Ваш район:</span>
                                <select name="region">
                                    <option>Невский</option>
                                    <option>Красногвардейский</option>
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

<div class="box-6" id="box-6">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <a href="#">
              <h2 class="text-center mb-3 pt-3">Невский район</h2>
            </a>
          </div>
          <div class="col-lg-6">
            <a href="#">
              <h2 class="text-center mb-3 pt-3">Красногвардейский<br>район</h2>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="contacts pl-3 pb-3">
              <span class="chats mr-2">
                  <? $this->renderPartial('messangers') ?>
              </span>
              <a href="tel:+79210952645">
                <span class="phone fc-orange font-weight-bold">8 (921) 095-26-45</span>
              </a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="contacts pl-3 pb-3">
              <span class="chats mr-2">
                  <? $this->renderPartial('messangers') ?>
              </span>
              <a href="tel:+79218728127">
                <span class="phone fc-orange font-weight-bold">8 (921) 872-81-27</span>
              </a>
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
