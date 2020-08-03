import $ from 'jquery';
import { FireHelpers } from '@base';
import { CopyWithMedia } from '../../../templates/components/copy-with-media/copy-with-media';
import { QuoteSlider } from '../../../templates/components/quote-slider/quote-slider';
import { Cal } from '../../../templates/components/calendar/calendar';

/**
 * @type class
 * @name FireComponentRecord
 * @description
 *
 * Component record class
 *
 **/
export class FireComponentRecord {
  // register correct component
  _registerComponent(component, name, id) {
    // mark as registered
    $(component).attr('data-registered', id);

    // init correct component class
    switch (name) {
      case 'copy-with-media':
        new CopyWithMedia(id).init();
        break;
      case 'quote-slider':
        new QuoteSlider(id).init();
        break;
      case 'calendar':
        new Cal(id).init();
        break;
      default:
        break;
    }
  }

  registerAllComponents() {
    // loop through all components on the page
    $('[data-fire-component]').each((index, component) => {
      // get name of component
      let names = $(component).data('fire-component');
      names = names.split(', ');

      // generate a unique ID
      const id = FireHelpers.generateUniqueId();

      for (const name of names) {
        this._registerComponent(component, name, id);
      }
    });
  }
}
