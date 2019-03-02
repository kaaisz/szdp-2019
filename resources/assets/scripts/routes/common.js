import { WOW } from 'wowjs';
import Sticky from 'sticky-js';
import '../partials/ajax.js'

export default {
  init() {
    // JavaScript to be fired on all pages

    //-//-//-//-//-//-//-//-//-//-//-//-//-//
    //-//-------------WOW JS------------//-//
    //-//-//-//-//-//-//-//-//-//-//-//-//-//

    const wow = new WOW()
    wow.init();

    //-//-//-//-//-//-//-//-//-//-//-//-//-//
    //-//------------Sticky JS----------//-//
    //-//-//-//-//-//-//-//-//-//-//-//-//-//

    new Sticky('.sticky');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
