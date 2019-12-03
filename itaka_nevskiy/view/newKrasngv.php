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
<?php
  $newLists = include __DIR__ . '/_new.php';
  $newList = $newLists['krasngv'];
  $oddEven = true;
  foreach ($newList as $key=>$item) :
?>
<div class="inner new ">
  <div class="objects">
    <?php if ($oddEven): ?>
    <div class="object odd">
    <?php $oddEven = !$oddEven;?>
    <?php else : ?>
      <div class="object even">
    <?php $oddEven = !$oddEven;?>
    <?php endif; ?>
        <div class="container pb-5 ">
            <div class="row pb-5 pt-5 ">
                <div class="col-lg-5 col-description">
                    <h3><?php echo $item['name']?></h3>
                    <div>
                        <span class="price-title">Адрес: </span>
                        <span class="price-text"><?php echo $item['adress']?></span>
                    </div>
                    <div>
                        <span class="price-title">Сдача: </span>
                        <span class="price-text"><?php echo $item['deadline']?></span>
                    </div>
                    <div>
                        <span class="price-title">Тип дома: </span>
                        <span class="price-text"><?php echo $item['type']?></span>
                    </div>
                    <div>
                        <span class="price-title">Отделка: </span>
                        <span class="price-text"><?php echo $item['decor']?></span>
                    </div>
                    <div class="pb-3">
                        <span class="price-title">Цена: </span>
                        <span class="price-text"><?php echo $item['price']?></span>
                    </div>
                    <div class="description">
                          <?php echo $item['textup']?>
                          <div class="collapse" id="viewdetails<?php echo $key?>">
                                <?php echo $item['textdown']?>
                          </div>
                          <a class="btn spoiler" data-toggle="collapse" data-target="#viewdetails<?php echo $key?>">Развернуть</a>
                    </div>
                    <div class="btn btn-danger btn-request" data-complex-name="<?php echo $item['name']?>">
                        <span>Узнать цены</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="complex-image">
                        <img src="/img/nevskiy/new/krasngv/<?php echo $item['image']?>.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
</div>

<div style="display:none;" id="request-form-content">
    <?php echo $this->renderPartial($this->landingViewPath . '_requestForm'); ?>
</div>

<?php echo $this->renderPartial($this->landingViewPath . '_footer'); ?>

<script type="text/javascript">
    var landingInner;

    $(document).ready(function () {
        landingInner = new LandingInner();
    })

</script>
