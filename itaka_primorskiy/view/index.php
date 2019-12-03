<?php ?>

<?php echo $this->renderPartial($this->landingViewPath . '_header'); ?>
<div class="box-1" id="box-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title center-block f-18"><span>Итака Приморский</span></h1>
                <h4 class="subtitle f-12">Приморский Район, Курортный район, Кронштадт</h4>
                <a href="/primorskiy/about" class="onas btn btn-sm btn-primary ">
                    <span>Подробнее о Приморском</span>
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2 class="why-we">Почему мы?</h2>
            </div>
        </div>
        <div class="row justify-content-lg-center mt-5">
            <div class="col-lg col-6">
                <div class="block">
                    <span class="title">На рынке <br>недвижимости</span>
                    <div class="bottom">
                        <span class="big-text">25</span>
                        <span class="small-text">лет</span>
                    </div>
                </div>
            </div>
            <div class="col-lg col-6">
                <div class="block">
                    <span class="title">Профессиональные<br> риэлторы</span>
                    <div class="bottom">
                        <img src="/img/primorskiy/icons/profi_icon.png">
                    </div>
                </div>
            </div>
            <div class="col-lg col-6">
                <div class="block">
                    <span class="title">Высокий стандарт<br>качества</span>
                    <div class="bottom">
                        <img src="/img/primorskiy/icons/standart_icon.png">
                    </div>
                </div>
            </div>
            <div class="col-lg col-6">
                <div class="block">
                    <span class="title">Знаем<br> каждый дом</span>
                    <div class="bottom">
                        <img src="/img/primorskiy/icons/dom_icon.png">
                    </div>
                </div>
            </div>
            <div class="col-lg col">
                <div class="block">
                    <span class="title"><br>Мы всегда рядом</span>
                    <div class="bottom">
                        <div style="display: inline-block">
                            <span class="big-text">4</span>
                        </div>
                        <div style="display: inline-block; line-height:20px; text-align: left; width: 70%;">
                            <span class="small-text">Офиса в Приморском р-не и г.Кронштадт</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-center">
            <div class="col-lg-12 text-center">
                <div data-dest=".box-4" class="btn btn-danger btn-big">
                    <span>Оставить заявку</span>
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
                    <span>НАШИ ОБЪЕКТЫ</span>
                </h3>
            </div>
        </div>

        <div class="row mt-2">
            <div class="text-center">
					<span class="subtitle">В нашей базе более <span class="f-24 big-title ">60 000</span> квартир в Санкт-Петербурге и Ленинградской
                    области,
                    <br>
                    а также дома, дачи, участки и коттеджи</span></span>
            </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-3 col-12">
              <a href="/primorskiy/new" >
                  <div class="object">
                      <img src="/img/primorskiy/new.png" alt="">
                      <div class="head">
                          <span>Новостройки</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="/primorskiy/home" >
                  <div class="object">
                      <img src="/img/primorskiy/second.png" alt="">
                      <div class="head">
                          <span>Вторичное жилье</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="/primorskiy/rent">
                  <div class="object">
                      <img src="/img/primorskiy/rent.png" alt="">
                      <div class="head">
                          <span>Аренда</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="/primorskiy/country">
                  <div class="object">
                      <img src="/img/primorskiy/country.png" alt="">
                      <div class="head">
                          <span>Загородная недвижимость</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="http://spbnovostroy.ru/pereustupki" data-dest=".box-4">
                  <div class="object">
                      <img src="/img/primorskiy/pereustup.png" alt="">
                      <div class="head">
                          <span>Переуступки</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="http://knspb.com/" data-dest=".box-4">
                  <div class="object">
                      <img src="/img/primorskiy/commercial.png" alt="">
                      <div class="head">
                          <span>Коммерческая недвижимость</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="#" data-dest=".box-4" onClick="document.getElementsByName('type')[0].selectedIndex=5">
                  <div class="object">
                      <img src="/img/primorskiy/mortage.png" alt="">
                      <div class="head">
                          <span>Ипотека</span>
                      </div>
                  </div>
              </a>
          </div>
          <div class="col-lg-3 col-12">
              <a href="#" data-dest=".box-4" onClick="document.getElementsByName('type')[0].selectedIndex=6">
                  <div class="object">
                      <img src="/img/primorskiy/assessment.png" alt="">
                      <div class="head">
                          <span>Оценка</span>
                      </div>
                  </div>
              </a>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center f-24">
                    <span>Для получения дополнительной информации звоните</span>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-12">
                <div class="text-center">
                    <span class="chats">
        							<? $this->renderPartial('messangers') ?>
        						</span>
                    <span class="f-24 fc-blue font-weight-bold">8 (812) 327-98-04</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="background-color: #f0f0f0">
    <div class="box-4">
        <div class="container pt-5">
            <div class="row mt-5">
                <div class="col-lg-12  text-center pt-5">
                    <h3 class="fc-white">
                        <span class="text-uppercase">Оставить заявку</span>
                    </h3>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-lg-8 offset-lg-2 pb-5">
                    <form class="form mt-3" id="request-form">
                        <div class="row">
                            <div class="col-lg-12 mt-3">
                                <div class="f-24 fc-blue text-center">
                                    <span>Вы можете оставить заявку, и мы с вами свяжемся</span>
                                </div>
                            </div>
                        </div>
                        <hr>

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
                                            <option>Ипотека</option>
                                            <option>Оценка</option>
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
                                    <button type="button" onclick="primorskiy.submitForm('#request-form')" class="btn btn-danger btn-big">
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
</div>
<div class="box-5" id="box-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="text-center text-uppercase">
                    <h3>
                        <span>Специалисты</span>
                    </h3>
                </div>
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-2 col-lg-1">
                <div class="arrow left" id="agent-prev-arrow">
                    <img src="/img/primorskiy/icons/left.png" alt="">
                </div>
            </div>
            <div class="col-8 col-lg-10">
                <div class="row" id="agent-slider">
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/bogach.jpg">
                        </div>
                        <div class="special">
                            <span>Новое строительство</span>
                        </div>
                        <div class="name">
                            <span>Богачева <br>Ирина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:BogachevaIN@itaka.ru">BogachevaIN@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Пора действовать! Мы найдём решение Вашей задачи!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/pech.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Печеникова <br>Татьяна</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PechenikovaTN@itaka.ru">PechenikovaTN@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>10 лет успеха – гарантия надежности!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/volos.jpg">
                        </div>
                        <div class="special">
                            <span>Загородная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Волосатова <br>Татьяна</span>
                        </div>
                        <div class="email">
                            <a href="mailto:VolosatovaTP@itaka.ru">VolosatovaTP@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>И дом, и дача, и земля!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/gerg.jpg">
                        </div>
                        <div class="special">
                            <span>Аренда <br><br></span>
                        </div>
                        <div class="name">
                            <span>Гергая <br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:GergayaOF@itaka.ru">GergayaOF@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Решаете сложную жилищную задачу? Доверьте ее профессионалам!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/brag.jpg">
                        </div>
                        <div class="special">
                            <span>Коммерческая недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Брагина <br>Лада</span>
                        </div>
                        <div class="email">
                            <a href="mailto:BradinaLA@itaka.ru">BradinaLA@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Когда нужен не просто результат, а 100 % успех!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/brech.jpg">
                        </div>
                        <div class="special">
                            <span>Ипотека<br><br></span>
                        </div>
                        <div class="name">
                            <span>Светлана <br>Бречко</span>
                        </div>
                        <div class="email">
                            <a href="mailto:BrechkoCG@itaka.ru">BrechkoCG@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Покупателю – достойная квартира!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/petros.jpg">
                        </div>
                        <div class="special">
                            <span>Новое строительство</span>
                        </div>
                        <div class="name">
                            <span>Петросян <br>Елена</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PetrosyanEA@itaka.ru">PetrosyanEA@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Лучше всего довериться профессионалам!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/mih.jpg">
                        </div>
                        <div class="special">
                            <span>Загородная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Михайлюк <br>Дмитрий</span>
                        </div>
                        <div class="email">
                            <a href="mailto:DanilovaSA@itaka.ru">DanilovaSA@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Все работают с недвижимостью, а мы с людьми</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/veden.jpg">
                        </div>
                        <div class="special">
                            <span>Аренда <br><br></span>
                        </div>
                        <div class="name">
                            <span>Веденеева <br>Ирина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:VedeneevaIV@itaka.ru">VedeneevaIV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Нет нерешаемых задач</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/fomich.jpg">
                        </div>
                        <div class="special">
                            <span>Ипотека <br><br></span>
                        </div>
                        <div class="name">
                            <span>Фомиченко <br>Виктория</span>
                        </div>
                        <div class="email">
                            <a href="mailto:FomichenkoVA@itaka.ru">FomichenkoVA@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Интересы клиента – руководство к действию!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/bark.jpg">
                        </div>
                        <div class="special">
                            <span>Новое строительство</span>
                        </div>
                        <div class="name">
                            <span>Баркалова <br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:BarkalovaOL@itaka.ru">BarkalovaOL@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Мы помогаем жить там, где Вам хочется!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/ogniv.jpg">
                        </div>
                        <div class="special">
                            <span>Аренда <br><br></span>
                        </div>
                        <div class="name">
                            <span>Огнивенко<br>Нэлли</span>
                        </div>
                        <div class="email">
                            <a href="mailto:OgnivehkoNG@itaka.ru">OgnivehkoNG@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Все решается!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/lap.jpg">
                        </div>
                        <div class="special">
                            <span>Коммерческая недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Лапочкин<br>Вячеслав</span>
                        </div>
                        <div class="email">
                            <a href="mailto:LapochkinVI@itaka.ru">LapochkinVI@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Дорогу осилит идущий!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/vjaz.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Вязовая<br>Марина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:VyazovayaMA@itaka.ru">VyazovayaMA@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Кто хочет – тот делает, кто не хочет – тот ищет возможности!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/faran.jpg">
                        </div>
                        <div class="special">
                            <span>Новое строительство</span>
                        </div>
                        <div class="name">
                            <span>Фаранова <br>Вероника</span>
                        </div>
                        <div class="email">
                            <a href="mailto:FaranovaVYu@itaka.ru">FaranovaVYu@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Добрым помогает судьба!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/kont.jpg">
                        </div>
                        <div class="special">
                            <span>Аренда <br><br></span>
                        </div>
                        <div class="name">
                            <span>Конторович <br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:KontorovichOV@itaka.ru">KontorovichOV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Я исхожу из потребностей клиента!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/golub.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Голубева<br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:GolubevaOS@itaka.ru">GolubevaOS@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Мои знания – ваше спокойствие!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/mam.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Мамиева <br>Кыстаман</span>
                        </div>
                        <div class="email">
                            <a href="mailto:MamievaKG@itaka.ru">MamievaKG@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Делай добро и бросай его в море, и оно к тебе вернется!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/kirs.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Кирсанова <br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:KirsanovaON@itaka.ru">KirsanovaON@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Для успехов в жизни умение общаться с людьми гораздо важнее, чем обладание талантом!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/stol.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Столяр<br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:StolyarOI@itaka.ru">StolyarOI@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Служить другим и делать добро!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/los.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Лосева <br>Людмила</span>
                        </div>
                        <div class="email">
                            <a href="mailto:LosevaLN@itaka.ru">LosevaLN@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Нет ничего невозможного!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/andr.JPG">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Андреева <br>Ирина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:ZubovichIV@itaka.ru">ZubovichIV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Эксперт по продажам залоговых квартир</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/gnet.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Гнеушева <br>Валентина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:GneushevaVV@itaka.ru">GneushevaVV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Со знанием дела</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/lazug.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Лазугина <br>Римма</span>
                        </div>
                        <div class="email">
                            <a href="mailto:LazuginaRYu@itaka.ru">LazuginaRYu@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Надежность, проверенная годами.</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/ermol.jpg">
                        </div>
                        <div class="special">
                            <span>Коммерческая недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Ермолаева <br>Елена</span>
                        </div>
                        <div class="email">
                            <a href="mailto:ErmolaevaEV@itaka.ru">ErmolaevaEV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Ваш надежный партнер на рынке недвижимости</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/ilin.jpg">
                        </div>
                        <div class="special">
                            <span>Аренда <br><br></span>
                        </div>
                        <div class="name">
                            <span>Ильина <br>Ирина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:IlbinaIN@itaka.ru">IlbinaIN@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Обращайтесь к лучшим!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/kudak.jpg">
                        </div>
                        <div class="special">
                            <span>Коммерческая и жилая<br>недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Кудакова <br>Елена</span>
                        </div>
                        <div class="email">
                            <a href="mailto:KudakovaEV@itaka.ru">KudakovaEV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Мне повезло: каждый раз я вижу результат своей работы и безмерно горда этим</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/arbuz.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Арбузов <br>Олег</span>
                        </div>
                        <div class="email">
                            <a href="mailto:ArbuzovOYu@itaka.ru">ArbuzovOYu@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Помогаю клиентам решать жилищные вопросы!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/petrova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Петрова <br>Валентина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PetrovaVV@itaka.ru">PetrovaVV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Помогаю менять жизнь своих клиентов к лучшему!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/tarkova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Таркова <br>Людмила</span>
                        </div>
                        <div class="email">
                            <a href="mailto:TarkovaLV@itaka.ru">TarkovaLV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Ювелирная работа с недвижимостью!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/kravcova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Кравцова <br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:KravcovaOV@itaka.ru">KravcovaOV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Меня рекомендуют, потому что доверяют!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/blohina.png">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Блохина <br>Наталья</span>
                        </div>
                        <div class="email">
                            <a href="mailto:BlohinaNN@itaka.ru">BlohinaNN@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Наилучшей оценкой моей работы будут рекомендации, которые Вы дадите своим знакомым и друзьям!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/postnikova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Постникова <br>Ирина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PostnikovaIYa@itaka.ru">PostnikovaIYa@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Быстро! Качественно! Профессионально!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/zhuravleva.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Журавлева <br>Елена</span>
                        </div>
                        <div class="email">
                            <a href="mailto:ZhuravlevaEB@itaka.ru">ZhuravlevaEB@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Всё лучшее для моих клиентов!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/rusakova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Русакова <br>Ольга</span>
                        </div>
                        <div class="email">
                            <a href="mailto:RusakovaOYu@itaka.ru"> RusakovaOYu@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Помогаю решать сложные жилищные вопросы!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/fedorova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Федорова <br>Лилия</span>
                        </div>
                        <div class="email">
                            <a href="mailto:FedorovaLR@itaka.ru">FedorovaLR@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Я люблю свою работу!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/gendur.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Гендрусева <br>Анжелика</span>
                        </div>
                        <div class="email">
                            <a href="mailto:GendrusevaAV@itaka.ru">GendrusevaAV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Счастливы мои клиенты - лучшая оценка моей работы!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/burdakova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Бурдакова  <br>Наталья</span>
                        </div>
                        <div class="email">
                            <a href="mailto:BurdakovaNV@itaka.ru">BurdakovaNV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Опыт имеет значение!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/polishuk.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Полищук <br>Марина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PolizchukMS@itaka.ru">PolizchukMS@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Репутация, проверенная временем!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/muraveva.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Муравьева <br>Наталья</span>
                        </div>
                        <div class="email">
                            <a href="mailto:MuravjevaNYu@itaka.ru">MuravjevaNYu@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Помогаю воплощать мечты!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/popova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Попова <br>Надежда</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PopovaNV@itaka.ru">PopovaNV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Качественно, профессионально, со всей ответственностью!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/shaganova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Шаганова <br>Елена</span>
                        </div>
                        <div class="email">
                            <a href="mailto:ShaganovaEI@itaka.ru">ShaganovaEI@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Помощь профессионала!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/dmitrieva.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Дмитриева <br>Элина</span>
                        </div>
                        <div class="email">
                            <a href="mailto:DmitrievaEV-563@itaka.ru">DmitrievaEV-563@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Помогу Вам сделать правильный выбор</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/martyanova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Мартьянова <br>Людмила</span>
                        </div>
                        <div class="email">
                            <a href="mailto:MartbyanovaLV@itaka.ru">MartbyanovaLV@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Профессионализм и надежность!</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/pyatlina.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Пятлина <br>Юлия</span>
                        </div>
                        <div class="email">
                            <a href="mailto:PyatlinaYUG@itaka.ru">PyatlinaYUG@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Индивидуальный подход - ключ в решении жилищного вопроса каждого клиента</em>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="photo">
                            <img src="/img/primorskiy/sotrudniki/uvarova.jpg">
                        </div>
                        <div class="special">
                            <span>Вторичная недвижимость</span>
                        </div>
                        <div class="name">
                            <span>Уварова <br>Александра</span>
                        </div>
                        <div class="email">
                            <a href="mailto:UvarovaAA@itaka.ru">UvarovaAA@itaka.ru</a>
                        </div>
                        <div class="devis">
                          <em>Надёжность и качество, проверенное годами!</em>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2 col-lg-1">
                <div class="arrow left" id="agent-next-arrow">
                    <img src="/img/primorskiy/icons/right.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" style="margin: 0 25%;">
                <div class="dotted">
                    <h5 class="text-center text-uppercase">
                        <span>Открыта вакансия <br>«Специалист по недвижимости»</span>
                    </h5>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-center mt-3">
            <div class="col-lg-12 text-center">
                <ul class="name">
                    <li><span>Профессиональное обучение</span></li>
                    <li><span>Свободный график</span></li>
                    <li><span>Работу рядом с домом гарантируем</span></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <span class="chats">
        							<? $this->renderPartial('messangers') ?>
        						</span>
                    <span class="f-24 fc-blue font-weight-bold">8 (812) 327-98-04</span>
                </div>
            </div>
        </div>
        <div class="row mt-3 pb-5">
            <div class="col-lg-12 mb-5">
                <div data-dest=".box-4" class="text-center">
                    <button type="button" class="btn btn-danger btn-big">
                        <span>Оставить заявку</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box-6 pb-5" id="box-6">
    <div class="container pb-5">
        <div class="row pb-5">
            <div class="col-lg-12">
                <div class="text-center text-uppercase">
                    <h3><span>Наши офисы</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="map" class="map"></div>
            </div>
            <div class="col-lg-6">
                <div class="tabs">
                    <div id="menu">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->renderPartial($this->landingViewPath . '_footer'); ?>

<script type="text/javascript">
    var primorskiy;
    $(document).ready(function() {
        primorskiy = new primorskiyIndex();
    })
</script>
