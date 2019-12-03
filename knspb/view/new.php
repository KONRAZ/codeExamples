<?php ?>

<?php echo $this->renderPartial('_header'); ?>
<div class="box-1" id="box-1">
    <div class="container  px-0">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="title center-block">Итака - коммерческая недвижимость</h1>
                <h2 class="subtitle">Подберем дом для вашего бизнеса</h4>
            </div>
        </div>
        <?php echo $this->renderPartial('_search'); ?>
    </div>
</div>
<div class="box-2">
  <div class="container">
    <div class="row adv py-5">
      <div class="adv-item">
        <div class="adv-img">
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/types.png" alt="wide-selection">
        </div>
        <div class="adv-title">
          <span>Все виды коммерческой<br>недвижимости</span>
        </div>
      </div>
      <div class="adv-item">
        <div class="adv-img">
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/all.png" alt="wide-selection">
        </div>
        <div class="adv-title">
          <span>Работаем по<br>Северо-Западу!</span>
        </div>
      </div>
      <div class="adv-item">
        <div class="adv-img">
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/profi.png" alt="wide-selection">
        </div>
        <div class="adv-title">
          <span>Команда<br>специалистов</span>
        </div>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-12">
        <div class="text-center">
          <h3>
            <span>Актуальные предложения</span>
          </h3>
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/line.png" alt="wide-selection">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-biznes-tsentr/">
            <div class="object">
              <div class="head">
                  <span>БИЗНЕС ЦЕНТРЫ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/bcenters.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="#">
            <div class="object">
              <div class="head">
                  <span>КРУПНЫЕ ИНВЕСТИЦИОННЫЕ ОБЪЕКТЫ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/investobj.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="#">
            <div class="object">
              <div class="head">
                  <span>СТРИТ РИТЕЙЛ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/streettreat.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-zemelnyi-uchastok/">
            <div class="object">
              <div class="head">
                  <span>ЗЕМЕЛЬНЫЕ УЧАСТКИ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/buildingplot.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-vstroennoe/">
            <div class="object">
              <div class="head">
                  <span>ВСТРОЕННЫЕ ПОМЕЩЕНИЯ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/vstroj.jpeg" alt="">
            </div>
          </a>
      </div>
    </div>
    <div class="row">
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-s-arendatorami/">
            <div class="object">
              <div class="head">
                  <span>ПОМЕЩЕНИЯ<br>С АРЕНДАТОРАМИ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/sarendatorami.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-s-oborudovaniem/">
            <div class="object">
              <div class="head">
                  <span>ПОМЕЩЕНИЯ<br>С ОБОРУДОВАНИЕМ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/soborud.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-torgovyi-tsentr/">
            <div class="object">
              <div class="head">
                  <span>ТОРГОВЫЕ ЦЕНТРЫ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/tc.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-imushchestvennyi-komplex/">
            <div class="object">
              <div class="head">
                  <span>ИМУЩЕСТВЕННЫЕ<br>КОМПЛЕКСЫ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/propcomplex.jpg" alt="">
            </div>
          </a>
      </div>
      <div class="col col-lg-20">
          <a href="/nedvizhimost/type-osz/">
            <div class="object">
              <div class="head">
                  <span>ОТДЕЛЬНО СТОЯЩИЕ<br>ЗДАНИЯ</span>
              </div>
              <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/objects/separvuilds.jpg" alt="">
            </div>
          </a>
      </div>
    </div>
  </div>
</div>
<div class="box-3" id="box-3">
  <div class="container">
    <div class="row explanation">
      <div class="col-lg-4">
        <div class="text">
          Заполните форму,<br>чтобы получить самое выгодное предложение
        </div>
        <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/line.png" alt="wide-selection">
      </div>
      <div class="col-lg-8">
        <div class="form">
          <div class="p-3 py-5">
            <h4 class="pb-4">
                <span>Оставьте заявку</span>
            </h4>
            <?$form=$this->beginWidget('CActiveForm', array(
                'id'=>'application-form_zayavka2',
                'enableClientValidation'=>true,
                'htmlOptions'=>array('enctype'=>'multipart/form-data', 'class'=>'application-form column span12'),
                'enableAjaxValidation'=>false,
                'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                ),
            ));
            $type='zayavka2';
            $feedback=$this->feedback;
            $feedback->setScenario('feedback');
            //echo $form->hiddenField($feedback,'feedback_type_id', array('value'=>1, 'id'=>'feedback_type_id_'.$type)); ?>



            <div class="input-box row">
              <div class="contacts col-lg-6">
                <div id="name_<?=$type?>" class="d-block">
                  <label class="label w-100">
                      <!-- <input name="name" type="text" class="form-control" placeholder="ФИО *" required> -->
                      <? echo $form->textField($feedback,'name', array('class'=>'form-control', 'placeholder'=> 'ФИО *')); ?>

                  </label>
                </div>
                <div id="phone_<?=$type?>" class="d-block">
                  <label class="label w-100">
                      <!-- <input name="phone" type="text" class="form-control" placeholder="ТЕЛЕФОН *" required> -->
                      <? echo $form->textField($feedback,'phone', array('class'=>'form-control', 'placeholder'=> 'ТЕЛЕФОН *')); ?>

                  </label>
                </div>
                <div id="email_<?=$type?>" class="d-block">
                  <label class="label w-100">
                      <!-- <input name="email" type="email" placeholder="E-MAIL *" class="form-control"> -->
                      <? echo $form->textField($feedback,'email', array('class'=>'form-control', 'placeholder'=> 'E-MAIL *')); ?>

                  </label>
                </div>
                <div id="select_<?=$type?>" class="d-block">
                  <label class="label w-100">
                        <!-- <select name="type" type="email" class="form-control" placeholder="Выберите тип заявки">
                            <option>Продать</option>
                            <option>Приобрести</option>
                            <option>Аендовать</option>
                            <option>Иное</option>
                        </select> -->
                        <? echo $form->dropDownList($feedback,'feedback_type_id',array(
                          // '1'=> array('Продать', 'value'=> 7 ),
                          // '2'=> array('Приобрести', 'value'=> 1 ),
                          // '3'=> array('Арендовать', 'value'=> 1 ),
                          // '4'=> array('Иное', 'value'=> 1 ), ),
                          '1'=> 'Продать',
                          '2'=> 'Приобрести',
                          '3'=> 'Арендовать',
                          '4'=> 'Иное', ),
                        array('value'=>1, 'class'=>'form-control', 'placeholder'=>'Выберите тип заявки', 'id'=>'feedback_type_id_'.$type));?>
                        <? echo $form->error($feedback,'type'); ?>
                  </label>
                </div>
              </div>
              <div id="text_<?=$type?>" class="comment col-lg-6 pl-0">
                <label class="w-100">
                    <!-- <textarea name="message" class="form-control" rows="6" placeholder="КОММЕНТАРИЙ *" required></textarea> -->
                    <? echo $form->textArea($feedback,'text', array('class'=>'form-control', 'rows'=>8, 'placeholder'=> 'КОММЕНТАРИЙ *')); ?>

                </label>
              </div>
            </div>
            <div name="<?=$type?>" id="send" class="col-lg-3 offset-9 p-0">
              <!-- <button class="btn-send btn-primary btn-lg">
                ОТПРАВИТЬ ЗАЯВКУ
              </button> -->
              <? echo CHtml::button("ОТПРАВИТЬ ЗАЯВКУ", array('class'=>'btn-send btn-primary btn-lg')); ?>
            </div>
            <div class="d-none">
              <a data-toggle="modal" data-target="#send_<?=$type?>" id="send_<?=$type?>" href="#"></a>
              <div class="modal fade" id="send_<?=$type?>" tabindex="-1" role="dialog" aria-labelledby="send-ok" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Отравка успешна</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      Сообщение отправлено успешно.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-request" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?$this->endWidget();?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<div class="box-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-4">
        <div class="plane">
          <div class="block">
            <div class="name-text">
              <span>ДЕПАРТАМЕНТ КОММЕРЧЕСКОЙ НЕДВИЖИМОСТИ</span>
            </div>
          </div>
          <div class="pers-name-text">
            <span class="d-block">Зам. Директора ДКН:</span>
            <span>Брагина Лада Александровна</span>
          </div>
          <div class="block resizable">
            <div class="hopdown">
              <div class="info-text pt-3">
                <span>СПб, Коломяжский пр. 15 кор.2 <br>
                (812) 327-98-01 <br>
                e-mail: <a href="mailto:comned@itaka.ru">comned@itaka.ru</a><br>
                (м. «Пионерская»)</span>
              </div>
            </div>
            <button anim="ripple" class="btn-contacts" type="button" name="contacts">Контакты</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row py-5">
      <div class="col-lg-12">
        <div class="text-center">
          <h3>
            <span>Наши подразделения</span>
          </h3>
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/line.png" alt="wide-selection">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col col-lg-20">
        <div class="sub-plane">
          <div class="block">
            <div class="name-text">
              <span>КОММЕРЧЕСКАЯ НЕДВИЖИМОСТЬ<br>В ОБЪЕКТАХ НОВОГО СТРОИТЕЛЬСТВА</span>
            </div>
          </div>
          <div class="block resizable">
            <div class="hopdown">
              <div class="pers-name-text">
                <span class="d-block">Руководитель:</span>
                <span>Бондаренко Ирина</span>
              </div>
              <div class="info-text">
                <span>СПб, Коломяжский пр. 15 кор.2 <br> (м. «Пионерская»)</span>
              </div>
            </div>
            <button anim="ripple" class="btn-contacts" type="button" name="contacts">Контакты</button>
          </div>
        </div>
      </div>
      <div class="col col-lg-20">
        <div class="sub-plane">
          <div class="block">
            <div class="name-text">
              <span  class="text-uppercase">Отдел крупных инвестиционных объектов</span>
            </div>
          </div>
          <div class="block resizable">
            <div class="hopdown">
              <div class="pers-name-text">
                <span class="d-block">Руководитель</span>
                <span>Лапочкин Вячеслав</span>
              </div>
              <div class="info-text">
                <span>СПб, Коломяжский пр. 15 кор.2
                  <br>(м. «Пионерская»)</span>
              </div>
            </div>
            <button anim="ripple" class="btn-contacts" type="button" name="contacts">Контакты</button>
          </div>
        </div>
      </div>
      <div class="col col-lg-20">
        <div class="sub-plane">
          <div class="block">
            <div class="name-text">
              <span class="text-uppercase" >Коммерческая недвижимость ЮГ</span>
            </div>
          </div>
          <div class="block resizable">
            <div class="hopdown">
              <div class="pers-name-text">
                <span class="d-block">Руководитель:</span>
                <span>Васильев Сергей <br>тел.: 8(921)941-38-75</span>
              </div>
              <div class="info-text">
                <span>СПб, пр. Маршала Жукова, д. 41
                  <br>(м. «Ленинский проспект»)</span>
              </div>
            </div>
            <button anim="ripple" class="btn-contacts" type="button" name="contacts">Контакты</button>
          </div>
        </div>
      </div>
      <div class="col col-lg-20">
        <div class="sub-plane">
          <div class="block">
            <div class="name-text">
              <span  class="text-uppercase">Коммерческая недвижимость В.О.</span>
            </div>
          </div>
          <div class="block resizable">
            <div class="hopdown">
              <div class="pers-name-text">
                <span class="d-block">Руководитель:</span>
                <span>Могилевский Дмитрий <br>тел.: 8(964)386-11-89</span>
              </div>
              <div class="info-text">
                <span>СПб, В.О., Средний пр., д. 28/29
                  <br>(м. «Василеостровская»)</span>
              </div>
            </div>
            <button anim="ripple" class="btn-contacts" type="button" name="contacts">Контакты</button>
          </div>
        </div>
      </div>
      <div class="col col-lg-20">
        <div class="sub-plane">
          <div class="block">
            <div class="name-text">
              <span  class="text-uppercase">Отдел офисной недвижимости в БЦ Санкт-Петербурга</span>
            </div>
          </div>
          <div class="block resizable">
            <div class="hopdown">
              <div class="info-text">
                <span class="d-block text-dark font-weight-bold">Cостав: </span>
                <span>Красоткина Наталья <br>8(921)307-94-00 <br><br>
                Захарова Наталья <br>8(921)969-36-56<br><br>
                Цурикова Татьяна <br>8(921)323-74-03</span>
              </div>
            </div>
            <button anim="ripple" class="btn-contacts" type="button" name="contacts">Контакты</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="box-5">
  <div class="container">
    <div class="row py-5">
      <div class="col-lg-6">
        <div class="text-center">
          <h3>
            <span>Новости компании</span>
          </h3>
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/line.png" alt="wide-selection">
        </div>
        <div class="article-box">
          <ul class="article-list">
            <?foreach($news as $new):?>
            <li>
              <span class="data"><?=$new->articles->getDate($new->articles->date_create);?></span>
              <span class="text">
                <a class="text-dark" href="<?=Yii::app()->createUrl('publications/news')?><?=$new->articles->translit;?>=<?=$new->articles->id;?>"><?=$new->articles->title;?></a>
              </span>
            </li>
            <?endforeach;?>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="text-center">
          <h3>
            <span>Аналитика</span>
          </h3>
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/line.png" alt="wide-selection">
        </div>
        <div class="article-box">
          <ul class="article-list">
            <li>
              <span class="data">15.05.2019</span>
              <span class="text">Сорталаво интернет-голосование в рамках конкурса "Доверие потребителя рынка недвижимости"</span>
            </li>
            <li>
              <span class="data">15.05.2019</span>
              <span class="text">Сорталаво интернет-голосование в рамках конкурса "Доверие потребителя рынка недвижимости"</span>
            </li>
            <li>
              <span class="data">15.05.2019</span>
              <span class="text">Сорталаво интернет-голосование в рамках конкурса "Доверие потребителя рынка недвижимости"</span>
            </li>
          </ul>
        </div>


      </div>
    </div>
  </div>
</div>
<div class="box-6">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h3>
            <span>Контакты</span>
          </h3>
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/line.png" alt="wide-selection">
        </div>
      </div>
    </div>
    <div class="row cont py-3">
      <div class="cont-item">
        <div class="cont-img">
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/phone.png" alt="wide-selection">
        </div>
        <div class="cont-text">
          <span>8 (812) 327-98-01<br></span>
          <span>8 (812) 740-70-40<br><br></span>
          <span>Звонок по России бесплатный<br></span>
          <span>8 (800) 333-98-00</span>
        </div>
      </div>
      <div class="cont-item">
        <div class="cont-img">
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/pointer.png" alt="wide-selection">
        </div>
        <div class="cont-text">
          <span>Санкт-Петербург<br></span>
          <span>Коломяжский пр. 15 кор.2<br></span>
        </div>
      </div>
      <div class="cont-item">
        <div class="cont-img">
          <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/envelope.png" alt="wide-selection">
        </div>
        <div class="cont-text">
          <span>email: <a href="mailto:komend@itaka.ru">komend@itaka.ru</a></span>
        </div>
      </div>
    </div>
  </div>
  <div id="map" class="map"></div>
</div>

<?php echo $this->renderPartial('_footer'); ?>

<script type="text/javascript">
    var knspb;
    $(document).ready(function() {
        knspb = new knspb();
    })
</script>
