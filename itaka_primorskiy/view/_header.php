<?php ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="header">
                <button class="hamburger hamburger--collapsed-md-block d-lg-none btn-menu float-left" id="btn-menu" type="button">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
                </button>
                <div class="logo float-left">
                    <a href="/primorskiy">
                        <img src="/img/primorskiy/icons/logo.png">
                    </a>
                </div>
                <div class="float-left menu">
                    <ul class="nav" id="mmenu">
                        <li><a href="<?php echo $this->action->id === 'index' ? '#' : '/primorskiy/#box-1' ?>" data-dest=".box-1">О компании</a></li>
                        <li><a href="<?php echo $this->action->id === 'index' ? '#' : '/primorskiy/#box-3' ?>" data-dest=".box-3">Наши объекты</a></li>
                        <li><a href="<?php echo $this->action->id === 'index' ? '#' : '/primorskiy/#box-5' ?>" data-dest=".box-5">Специалисты</a></li>
                        <li><a href="<?php echo $this->action->id === 'index' ? '#' : '/primorskiy/#box-6' ?>" data-dest=".box-6">Офисы</a></li>
                    </ul>
                </div>
                <div class="head-contacts">
                    <div class="chats float-left">
                        <? $this->renderPartial('messangers') ?>
                    </div>
                    <div class="phone float-left f-18 font-weight-bold">
                        <span>8 (812) 327-98-04</span>
                    </div>
                    <div class="btn btn-danger btn-request" data-dest=".box-4">
                        <span>Заявка</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
