<div class="row">
    <div class="col-lg-10">
      <div id="search" class="search">
        <div class="bar-item col-lg-2 px-0">
          <div class="cell" sval>
            Тип сделки
          </div>
          <ul id="deal" class="dropdown">
            <li>
              <div class="cell" sval="prodazha">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Продажа</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="arenda">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Аренда</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="bar-item col-lg-3 px-0">
          <div class="cell">
            Тип недвижимости
          </div>
          <ul id="type" class="dropdown">
            <li>
              <div class="cell" sval="biznes-tsentr">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Бизнес-центр</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="vstroennoe">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Встроенное помещение</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="osz">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>ОСЗ</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="gotovyi-biznes">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Готовый бизнес</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="s-arendatorami">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Помещение с арендаторами</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="s-oborudovaniem">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Помещение с оборудованием</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="zemelnyi-uchastok">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Земельный участок</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="imushchestvennyi-komplex">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Имущественный комплекс</span>
              </div>
            </li>
            <li>
              <div class="cell" sval="torgovyi-tsentr">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Торговый центр</span>
              </div>
            </li>
          </ul>
        </div>
        <div class="bar-item col-lg-3 px-0">
          <div class="cell">
            Район
          </div>
          <ul id="region" class="dropdown">
            <li>
              <div class="cell" sval="sankt-peterburg">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Санкт-Петербург</span>
              </div>
              <?
              $districts=Districts::model()->findAllByAttributes(array('regions_id'=>78));
              ?>
              <ul id="district" class="sub-dropdown">
                <? foreach ($districts as $district): ?>
                  <li>
                    <div class="cell" sval="<?=$district->chpuName?>" location="<?=$district->location; ?>">
                      <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                      <span>
                        <?=$district->name;?>
                        <?echo ' '.$district->short_type;?>
                      </span>
                    </div>
                  </li>
                  <? endforeach; ?>
              </ul>
            </li>
            <li>
              <div class="cell" sval="leningradskaya-oblast">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Лен. Область</span>
              </div>
              <?
              $provinces=Adress::model()->with('addition')->findAllByAttributes(array('AOLEVEL'=>3, 'REGIONCODE'=>47), array('order'=>'FORMALNAME'));
              ?>
              <ul id="district" class="sub-dropdown">
                <? foreach ($provinces as $province): ?>
                  <li>
                    <div class="cell" sval="<?=$province->addition->chpuName;?>">
                      <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                      <span>
                        <?=$province->FORMALNAME;?>
                        <?echo ' '.$province->SHORTNAME;?>
                      </span>
                    </div>
                  </li>
                  <? endforeach; ?>
              </ul>
            </li>
            <li>
              <div class="cell" sval="pskovskaya-oblast">
                <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                <span>Псковская область</span>
              </div>
              <?
              $pskovs=Adress::model()->with('addition')->findAllByAttributes(array('AOLEVEL'=>3, 'REGIONCODE'=>60), array('order'=>'FORMALNAME'));
              ?>
              <ul id="district" class="sub-dropdown">
                <? foreach ($pskovs as $pskov): ?>
                  <li>
                    <div class="cell" sval="<?=$pskov->addition->chpuName;?>">
                      <img src="<?=Yii::app()->baseUrl; ?>/media/knspb/images/knspb/small_arr.png" alt="">
                      <span>
                        <?=$pskov->FORMALNAME;?>
                      </span>
                    </div>
                  </li>
                  <? endforeach; ?>
              </ul>
            </li>
          </ul>
        </div>
        <div class="bar-item col-lg-2 px-0">
          <div class="cell">
            Площадь
          </div>
          <ul id="space" class="dropdown ">
            <li>
              <div class="inputs">
                <label for="ot">От: </label>
                <input type="text" id="ot" name="ot" class="search-num" placeholder="20 кв.м"/>
              </div>
            </li>
            <li>
              <div class="inputs">
                <label for="do">До: </label>
                <input type="text" id="do" name="do" class="search-num" placeholder="160 кв.м"/>
              </div>
            </li>
          </ul>
        </div>
        <div class="bar-item col-lg-2 px-0">
          <div class="cell">
            Цена
          </div>
          <ul id="cost" class="dropdown">
            <li>
              <div class="inputs">
                <label for="ot">От: </label>
                <input type="text" id="ot" name="ot" class="search-num" placeholder="25000"/>
              </div>
            </li>
            <li>
              <div class="inputs">
                <label for="do">До: </label>
                <input type="text" id="do" name="do" class="search-num" placeholder="100000000"/>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-2">
      <button id="btn-search" class="btn-search btn-primary btn-lg">
        НАЙТИ
      </button>
    </div>
</div>
