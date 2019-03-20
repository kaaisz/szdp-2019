import { WOW } from 'wowjs';
import '../partials/ajax.js';

export default {
  init() {
    // JavaScript to be fired on all pages

    //-//-//-//-//-//-//-//-//-//-//-//-//-//
    //-//-------------WOW JS------------//-//
    //-//-//-//-//-//-//-//-//-//-//-//-//-//

    const wow = new WOW()
    wow.init();

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
