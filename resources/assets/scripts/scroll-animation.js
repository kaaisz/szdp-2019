import $ from 'jquery';
import ScrollMagic from 'scrollmagic';
import 'debug.addIndicators';

(function($) {
  if(!navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)){
    $(function () {
      //-//-//-//-//-//-//-//-//-//-//-//-//-//
      //-//----------ScrollMagic----------//-//
      //-//-//-//-//-//-//-//-//-//-//-//-//-//
      // init scrollmagic
      const controller = new ScrollMagic.Controller();
      const trigger = document.querySelector('.bio__img_wrap');
      const stickyStart = trigger.offsetTop;
      const stickyEnd = stickyStart + (document.querySelector('#bio').offsetHeight - 670);
      console.log(controller);
      
  
      // // multiple pin in a single element
      new ScrollMagic.Scene({
        // define options by creating projects
        triggerElement: '.bio__img_wrap',
        triggerHook: 0,
        duration: stickyEnd,
      })
      .setPin('.bio__img_wrap', {pushFollowers: false})
      // .addIndicators({
      //   name: 'fade scene',
      //   colorTrigger: 'black',
      //   indent: '0',
      //   colorStart: '#75C695',
      // })
      .addTo(controller);
    })
  }
})(jQuery);

module.exports = $;