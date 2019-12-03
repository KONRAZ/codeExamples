function nevskiyIndex() {

    this.submitForm = function(formSelector) {
      var form = new FormData($(formSelector)[0]);

      if (!$(formSelector)[0].checkValidity()) {
          $(formSelector)[0].reportValidity();
          return;
      }
      form.append('regionPageName', $('.box-1 h1.title').text());

      function takeRegionForMail(){
        var adrArr = [...new Set(window.location.pathname.split('/'))];
        if ( adrArr.length > 2 ) {
          return adrArr[2];
        }
        return adrArr[1];
      }

      $.ajax({
          url: '/mail/RegionsMail/' + takeRegionForMail(), //window.location.pathname,
          data: form,
          processData: false,
          contentType: false,
          type: 'POST',
          success: function(data){
              if (data) {
                  alert("Ваша заявка успешно отправлена!");
                  $(formSelector)[0].reset();
              }
          }
      })
  }

    this.init = function() {
        $('[data-dest]').on('click', function () {
            var dest = $(this).attr('data-dest');
            if (dest && $(dest).length) {
                $('html, body').animate({
                    scrollTop: $(dest).offset().top
                }, 1100);
            }
        });

        var slidesToShow = this.isMobile() ? 1 : 4;
        $('#agent-slider1').slick({
            slidesToShow: slidesToShow,
            nextArrow: '#agent-next-arrow1',
            prevArrow: '#agent-prev-arrow1'
        });
        $('#agent-slider2').slick({
            slidesToShow: slidesToShow,
            nextArrow: '#agent-next-arrow2',
            prevArrow: '#agent-prev-arrow2'
        });

        $('#filter-tab').children().on('click', function(){
          var direction =$(this).children().attr('id');
          direction = "." + direction.replace("filter-","");

          $('#agent-slider2').slick('slickUnfilter');
          $('#agent-slider2').slick('slickFilter', direction ).slick('refresh');
          var slides = 4;
          if ($('#agent-slider2').slick("getSlick").slideCount < 4){
            slides = $('#agent-slider2').slick("getSlick").slideCount;
          }
          $('#agent-slider2').slick('slickSetOption', {slidesToShow: slides,}, true);
          $('#agent-slider2').slick('slickGoTo', 0);
        })

        $('#pills-tab').children().on('click', function(){
          var direction =$(this).children().attr('id');
          direction = "." + direction.replace("pills-","").replace("-tab", "");

          $('#agent-slider1').slick('slickUnfilter');
          $('#agent-slider1').slick('slickFilter', direction ).slick('refresh');
          var slides = 4;
          if ($('#agent-slider1').slick("getSlick").slideCount < 4){
            slides = $('#agent-slider1').slick("getSlick").slideCount;
          }
          $('#agent-slider1').slick('slickSetOption', {slidesToShow: slides,}, true);
          $('#agent-slider1').slick('slickGoTo', 0);
        })

        if (this.isMobile()) {
            var $menu = $('#mmenu').mmenu();
            var $icon = $("#btn-menu");
            var API = $menu.data( "mmenu" );

            $icon.on( "click", function() {
                if ($('#mmenu').hasClass('mm-menu_opened')) {
                    API.close();
                } else {
                    API.open();
                }
            });

            $('#mmenu li').on('click', function() {
                API.close();
            })
        }


    }

    this.isMobile = function() {
        return window.outerWidth <= 991;
    }

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
                for (var i = 0, l = groups.length; i < l; i++) {
                  if (groups[i].name==window.location.pathname.split("/")[1]){
                    createMenuGroup(groups[i]);
                  }
                }


            function createMenuGroup (group) {
                // Пункт меню.
                var menuItem = $('<li></li>'),
                // Коллекция для геообъектов группы.
                    collection = new ymaps.GeoObjectCollection(null, {
                      iconLayout: 'default#image',
                      iconImageHref: '/img/kalininskiy/icons/map2.png',
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

    this.init();
    this.initMap();
}
