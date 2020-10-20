window.addEventListener('DOMContentLoaded', () => {           // Ждём загрузки DOM дерева 
  'use strict';
  const 
    body = document.body,
    width = document.documentElement.clientWidth;
  
  // Показ меню каталога
  const toggleCatalog = () => {
    const btn = document.getElementById('header-button'),
    menu = document.querySelector('.frame'),
    shadow = document.querySelector('.header-button-shadow');

    btn.addEventListener('click', () => {
      if(!menu.classList.contains('active')){
        menu.classList.add('active');
        shadow.style.cssText = `bottom: -44px`;
        menu.style.height = `auto`;
      } else {
        menu.classList.remove('active');
        shadow.style.cssText = `bottom: 0px`;
        menu.style.height = `0`;
      }      
    });

    body.addEventListener('click', (e) => {
      let target = e.target;
      if(target.closest('.frame-menu') || target.closest('#header-button')){      
      } else {
        menu.classList.remove('active');
        shadow.style.cssText = `bottom: 0px`;        
        menu.style.height = `0`;        
      }      
    });
  };
  toggleCatalog();

  // Меню
  const toggleMenu = () => {
    const btn = document.getElementById('menu-1'),
      close = document.getElementById('menu-2'),
      menu = document.querySelector('.menu-main');

    body.addEventListener('click', (e) => {
      let target = e.target;

      if(width <= 567) {
        if(target.closest('#menu-1')){
          menu.classList.add('active');
          body.style.cssText = `overflow: hidden;`;
        } else if(target.closest('#menu-2') || !target.closest('.menu-main')){
          menu.classList.remove('active');
          body.style.cssText = `overflow: auto;`;
        }
      } else{
        if(target.closest('#menu-1')){
          menu.classList.add('active');
        } else if(target.closest('#menu-2') || !target.closest('.menu-main')){
          menu.classList.remove('active');
        }
      }      
    });
  };
  toggleMenu();

  // Слайдер
  const 
    mainSlider = document.getElementById('main-slider'),
    slider = document.getElementById('slider'),
    portfolio = document.getElementById('portfolio');

  const initSlider = (selectorId, pagination, scrollbar, next, prev) => {
    let sliderMain = new Swiper(selectorId, {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: pagination,
        type: 'fraction',
      },
      scrollbar: {
        el: scrollbar,
        hide: false,  
        snapOnRelease: true
      },
      navigation: {
        nextEl: next,
        prevEl: prev,
      },
    });
  };

  if(mainSlider){
    let sliderMain = new Swiper('#main-slider', {
      slidesPerView: 1,
      pagination: {
        el: '#slider-main-pagination',
        type: 'fraction',
      },
      scrollbar: {
        el: '#slider-main-scrollbar',
        hide: false,  
        snapOnRelease: true
      },
      navigation: {
        nextEl: '#slider-main-next',
        prevEl: '#slider-main-prev',
      },
      breakpoints: {
        // when window width is >= 320px
        320: {
          spaceBetween: 1
        }
      }
    });
  }  

  if(slider){
    let slider = new Swiper('#slider', {
      spaceBetween: 0,
      pagination: {
        el: '#slider-pagination',
        type: 'fraction',
      },
      scrollbar: {
        el: '#slider-scrollbar',
        hide: false,  
        snapOnRelease: true
      },
      navigation: {
        nextEl: '#slider-button-next',
        prevEl: '#slider-button-prev',
      },
      breakpoints: {
        // when window width is >= 567px
        567: {
          slidesPerView: 1
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 2
        },
        // when window width is >= 992px
        992: {
          slidesPerView: 3
        },
        // when window width is >= 1200px
        1200: {
          slidesPerView: 4
        },
      }
    });
  }

  if(portfolio){
    let slideBlock = document.querySelectorAll('.portfolio');

    slideBlock.forEach((item) => {
      if(item){
        let atrId = item.getAttribute('id');
        initSlider(
          `#portfolio-slider_${atrId}`,
          `#portfolio-pagination_${atrId}`,
          `#portfolio-scrollbar_${atrId}`,
          `#portfolio-next_${atrId}`,
          `#portfolio-prev_${atrId}`
          );
      }
    });
  }

  // Плавная прокрутка до слайдера
  const anchors = document.querySelectorAll('a.scroll-to');

  for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      
      const blockID = anchor.getAttribute('href');
      
      document.querySelector(blockID).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  }

  // Окно благодарности
  document.addEventListener('wpcf7mailsent', (response) => {
    
    const modalHome = document.getElementById('modalHome');

    if(modalHome){
      jQuery('#modalHome').modal('hide');
      swal({
        title: "Спасибо!",
        text: response.detail.apiResponse.message,
        icon: "success",
        button: "Закрыть"
      });
    } 

    swal({
      title: "Спасибо!",
      text: response.detail.apiResponse.message,
      icon: "success",
      button: "Закрыть"
    });
  });

  // Заполнение формы
  let titlePage = document.getElementById('titlePage');
  if(titlePage) {
    const getTotal = () => {
      let
        titleForm = document.getElementById('titleForm'),
        newPrice = document.getElementById('newPrice'),
        num = newPrice.innerText,
        total = document.getElementById('total'),
        checkBox = document.querySelectorAll('.check__input');
      // Получаем заголовок
      titlePage = titlePage.innerText;
      // Вносим заголовок в поле формы
      titleForm.value = titlePage;
      // Запрещаем ввод в поле
      titleForm.setAttribute('readonly', true);
  
      // Функция ставит пробел через каждые три символа
      const setNumb = (n) => {
        n += '';
        n = new Array(4 - n.length % 3).join("U") + n;
        return n.replace(/([0-9U]{3})/g, "$1 ").replace(/U/g, "");
      };
  
      // Убираем все пробелы
      num = +num.replace(/\s+/g, '');
      // Ставим пробелы через каждые три символа
      let newNum = setNumb(num);
      // Выводим в input полученное значение
      total.value = `${newNum} р.`;
      // Запрещаем ввод в поле
      total.setAttribute('readonly', true);
  
      // функция запуска анимации (итоговый каунтТотал мы узнаем ранее)
      const animate = ({ duration, draw, timing }) => {
  
        let start = performance.now();
  
        requestAnimationFrame(function animate(time) {
            let timeFraction = (time - start) / duration;
            if (timeFraction > 1) timeFraction = 1;
            let progress = timing(timeFraction);
            draw(progress);
            if (timeFraction < 1) {
                requestAnimationFrame(animate);
            };
        });
      };
  
      // Перебираем все чекбоксы
      checkBox.forEach((elem) => {        
        // Определяем по какому кликнули
        elem.addEventListener('change', () => {
          // Получаем значение чекбокса
          let value = elem.value;  
          // Убираем все пробелы
          value = +value.replace(/\s+/g, '');
          // Если выбрали, то прибавляем и выводим
          if(elem.checked){
            num += value;
            animate({
              // скорость анимации
              duration: 1000,
              // Функция расчёта времени
              timing(timeFraction) {
                  return timeFraction;
              },
              // Функция отрисовки
              draw(progress) {
                  // в ней мы и производим вывод данных
                  total.value = `${setNumb(Math.floor((num - value) + (progress * value)))} р.`;
              }
            });
          } else {
            // Иначе вычитаем и выводим
            num -= value;
            animate({
              // скорость анимации
              duration: 1000,
              // Функция расчёта времени
              timing(timeFraction) {
                  return timeFraction;
              },
              // Функция отрисовки
              draw(progress) {
                  // в ней мы и производим вывод данных
                  total.value = `${setNumb(Math.floor((num + value) - (progress * value)))} р.`; 
              }
            });
          };
        });
      });
    };
    getTotal();
  }

});