import $ from 'jquery';
import ScrollMagic from 'scrollmagic';
import 'debug.addIndicators';

(function($) {
  $(function () {
    //-//-//-//-//-//-//-//-//-//-//-//-//-//
    //-//----------ScrollMagic----------//-//
    //-//-//-//-//-//-//-//-//-//-//-//-//-//
    // init scrollmagic
    const controller = new ScrollMagic.Controller();
    console.log(controller);

    // // multiple pin in a single element
    new ScrollMagic.Scene({
      // define options by creating projects
      triggerElement: '.bio__sub.right',
    //   triggerHook: 0,
    //   duration: '70%',
    })
    // .setPin('.bio__sub.right', {pushFollowers: false})
    .addIndicators({
      name: 'fade scene',
      colorTrigger: 'black',
      indent: '200',
      colorStart: '#75C695',
    })
    .addTo(controller);
  })
})(jQuery);

module.exports = $;