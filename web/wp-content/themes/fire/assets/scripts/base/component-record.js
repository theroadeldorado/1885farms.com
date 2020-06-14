import $ from 'jquery';
import { FireHelpers } from '@base';

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
      case 'component-name':
        // new ComponentName(id).init();
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
