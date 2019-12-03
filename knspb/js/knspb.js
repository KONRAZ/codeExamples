// анимация кнопок контактов
[].map.call(document.querySelectorAll('[anim="ripple"]'), el=> {
    el.addEventListener('click',e => {
        e = e.touches ? e.touches[0] : e;
        const r = el.getBoundingClientRect(), d = Math.sqrt(Math.pow(r.width,2)+Math.pow(r.height,2)) * 2;
        el.style.cssText = `--s: 0; --o: 1;`;
        el.offsetTop;
        el.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${e.clientX - r.left}; --y:${e.clientY - r.top};`;
        setTimeout(function(){
          el.style.cssText =
          `-webkit-animation: movedown 0.3s linear forwards;
          -moz-animation: movedown 0.3s linear forwards;
          -ms-animation: movedown 0.3s linear forwards;
          -o-animation: movedown 0.3s linear forwards;
          animation: movedown 0.3s linear forwards;
          position: absolute;
          top: 10%;
          left: 25%;`;
        }, 250);
        setTimeout(function() {
          el.parentNode.classList.add('res');
          el.parentNode.getElementsByClassName("hopdown")[0].classList.add('slideDown');
        }, 300);
        setTimeout(function() {
          el.style.cssText = `display: none;`;
        }, 600);
        console.log(r);
    })
});
// анимация подчеркивания мепню
[].map.call(document.querySelectorAll('[anim="line"]'), el=> {
    el.addEventListener('mouseenter',e => {
        e = e.touches ? e.touches[0] : e;
        const r = el.getBoundingClientRect();
        // document.querySelectorAll('#line')[0].style.cssText = `--s: 0; --o: 1;`;
        document.querySelectorAll('#line')[0].style.cssText = `--t: 1; --x:${el.offsetLeft};`;
        console.log(r.left);
        console.log(el.offsetLeft);
    })
});
document.querySelectorAll('#line')[0].style.cssText = `--t: 1; --x: 0 ;`;


// прокрутка по клику
$('[data-dest]').on('click', function () {
    var dest = $(this).attr('data-dest');
    if (dest && $(dest).length) {
        $('html, body').animate({
            scrollTop: $(dest).offset().top
        }, 1100);
    }
});

function knspb(){
  var menu = {
    deal: 'Тип сделки',
    type: 'Тип недвижимости',
    region: 'Район',
  };

  // Якарты
  this.initMap = function() {
      ymaps.ready(init);
      function init() {
          // Создание экземпляра карты.
          var myMap = new ymaps.Map('map', {
                  center: [60.001523, 30.299429],
                  zoom: 14
              }, {
                  searchControlProvider: 'yandex#search'
              }),
              // Контейнер для меню.
              menu = $('<ul class="menu"/>');
              //groups в файле groups.js
              groups = {
                   name: "kingisepp",
                   items: [
                   {
                       center: [60.002150, 30.300005],
                       name: "<h2>Санкт-Петербург, Коломяжский пр. 15 кор.2</h2>",
                       content: "Часы работы: <br>Пн.- Пт.: с 10:00 до 19:00<br>Сб.-Вс.: выходной",
                   }]
               };
             createMenuGroup(groups);


          function createMenuGroup (group) {
              // Пункт меню.
              var menuItem = $('<li></li>'),
              // Коллекция для геообъектов группы.
                  collection = new ymaps.GeoObjectCollection(null, {
                    iconLayout: 'default#image',
                    iconImageHref: '/media/knspb/images/knspb/map2.png',
                    iconImageSize: [39, 50],
                    iconImageOffset: [-11, -30]
                  }),
              // Контейнер для подменю.
                  submenu = $('<ul class="submenu"/>');
              // Добавляем коллекцию на карту.
              myMap.geoObjects.add(collection);
              // Добавляем подменю.
              menuItem
                  .append(submenu)
                  // Добавляем пункт в меню.
                  .appendTo(menu)
                  // По клику удаляем/добавляем коллекцию на карту и скрываем/отображаем подменю.
                  .find('a')
                  .bind('click', function () {
                      if (collection.getParent()) {
                          myMap.geoObjects.remove(collection);
                          submenu.hide();
                      } else {
                          myMap.geoObjects.add(collection);
                          submenu.show();
                      }
                  });
              for (var j = 0, m = group.items.length; j < m; j++) {
                  createSubMenu(group.items[j], collection, submenu);
              }
          }

          function createSubMenu (item, collection, submenu) {
            var MyBalloonContentLayoutClass = ymaps.templateLayoutFactory.createClass(
            '<div class="bal_content"><div class="bal_img"><img src="'+ item.img_url + '" alt=""></div>' +
            '<div class="bal_info">' + item.name + '<p>' + item.content +'</p></div></div>'
            );
            // Пункт подменю.
            var submenuItem = $('<li><a href="#">' + item.name + '</a></li>'),
            // Создаем метку.
                placemark = new ymaps.Placemark(item.center, {
                  // balloonContent: item.name
                },
              {balloonContentLayout: MyBalloonContentLayoutClass}
            );

            // Добавляем метку в коллекцию.
            collection.add(placemark);
            // Добавляем пункт в подменю.
            submenuItem
                .appendTo(submenu)
                // При клике по пункту подменю открываем/закрываем баллун у метки.
                .find('a')
                .bind('click', function () {
                    if (!placemark.balloon.isOpen()) {
                        placemark.balloon.open();
                    } else {
                        placemark.balloon.close();
                    }
                    return false;
                });
          }

          // Добавляем меню в тэг BODY.
          menu.appendTo($('#menu'));
          // Выставляем масштаб карты чтобы были видны все группы.
          myMap.setBounds(myMap.geoObjects.getBounds(), {checkZoomRange:true, zoomMargin: 25});
      }
  }
  this.initMap();

  this.init = function() {
    var menu = {
      deal : 'Тип сделки',
      type : 'Тип недвижимости',
      region : 'Район',
    };
    $('.search-num').bind('change keyup input click', function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
    });
    //переключатели в меню поиска
    $('.box-1 .bar-item>.cell').on('click', function(){
      $(this).parents('.search').find('.show-sub').removeClass('show-sub');
      $(this).children('ul').addClass('show-sub');
    });

    $('.box-1 .cell').on('click', function(){
      if ( $(this).next('ul.show-sub').length ){
          $(this).next('ul.show-sub').removeClass('show-sub');
          $(this).next('ul').find('ul').removeClass('show-sub');
      } else {
        $(this).closest('ul').find('.show-sub').removeClass('show-sub');
        //$(this).closest('.selected').removeClass('selected');
        $(this).next('ul').addClass('show-sub');
      }
    });

    $('.sub-dropdown .cell').on('click', function(){
      if ($(this).hasClass('selected')){
        $(this).removeClass('selected');
      } else {
        $(this).addClass('selected');
      }
    });

    $('.dropdown>li>.cell').click(function(){
      el = $(this).closest('li');
      if (!$(this).hasClass('selected')){
        el.parents('.dropdown').find('.selected').removeClass('selected');
        $(this).addClass('selected');
      }
      if (el.find('.sub-dropdown').length){
        console.log(el);
        el.find('.sub-dropdown').css('left', el.outerWidth()+10);

      } else if (!$(this).closest('.sub-dropdown').length){
        console.log(el.parents('.bar-item').children('.cell').attr('sval'));
        if (el.parents('.bar-item').children('.cell').attr('sval')!=$(this).attr('sval')) {
          el.parents('.bar-item').children('.cell').text($(this).text());
          el.parents('.bar-item').children('.cell').attr('sval', $(this).attr('sval'));
        } else {
          el.parents('.bar-item').children('.cell').text(menu[el.parent().attr('id')]);
          el.parents('.bar-item').children('.cell').attr('sval', '');
          el.parents('.bar-item').find('.selected').removeClass('selected');
        }
      }
    });

    var selectedArr = {};
    $('#btn-search').on('click', function(){
      var url = '';
      for(var i=0; i<7; i++){
          if(selectedArr[i] && selectedArr[i][1]!==''){
              url+=selectedArr[i][0]+'-'+selectedArr[i][1]+'/';
          }
      }
      var hostname='knspb.com';//window.location.hostname;
      url='http://'+hostname+'/nedvizhimost/'+url;

      document.location.href = url;
    });
    function takeVal( type , id, name, place ){
      selectedArr[place] = { 0 : name, 1 : ''};
      var bar_el = $('#'+id+'').prev();
      if ( type == 'single' ){
        if (bar_el.attr('sval') != ''){
          var subval = '';
          subval = $('#'+id+'').prev().attr('sval');
          selectedArr[place][1] = subval;
        }
      } else if (type == 'several') {
        if (bar_el.attr('sval') != ''){
          var subval = '';
          var subsize = 0;
          $('#'+id+' .selected').each(function(){
            subsize += 1;
            subval += $(this).attr('sval')+'-and-';
          });

          selectedArr[3] = { 0 : 'region', 1 : ''};
          if (subsize > 0){
            selectedArr[3][1] = $('#region>li>.selected').attr('sval');
            selectedArr[place][1] = subval.substring(0, subval.length - 5);
          } else {
            selectedArr[place][1] = '';
          }
        }
      } else if ( type == 'input'){
        var ot = $('#'+id+' input[ name = "ot" ]').val() != '' ? 'ot-'+$('#'+id+' input[ name = "ot" ]').val() : '';
        var odo = $('#'+id+' input[ name = "do" ]').val() != '' ? 'do-'+$('#'+id+' input[ name = "do" ]').val() : '';
        if ((ot)&&(odo)){
          selectedArr[place][1] = ot+'-'+odo;
        } else {
          selectedArr[place][1] = ot+odo;
        }
      }
    }

    $('#deal .cell').on('click', function(){
      takeVal( 'single' , 'deal', 'deal', 1 );
    });
    $('#type .cell').on('click', function(){
      takeVal( 'single' , 'type', 'type', 2 );
    });
    $('#district .cell').on('click', function(){
      takeVal( 'several' , 'district', 'district', 4 );
    });
    $('#cost').bind('change keyup input click', function(){
      takeVal( 'input' , 'cost', 'cost', 5 );
    });
    $('#space').bind('change keyup input click', function(){
      takeVal( 'input' , 'space', 'space', 6 );
    });
  }
  this.init();
}
