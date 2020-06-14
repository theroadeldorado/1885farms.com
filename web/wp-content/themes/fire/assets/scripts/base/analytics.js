// Note: Google Analytics should be initiated using a Drupal module

export class FireAnalytics {
  static get isSetup() {
    return typeof window.ga === 'undefined' ? false : true;
  }

  static get category() {
    return {
      SLIDERS: 'Sliders',
      MODALS: 'Modals',
      BUTTONS: 'Buttons',
      FORMS: 'Forms',
      ERRORS: 'Errors',
    };
  }

  static get action() {
    return {
      SUBMIT: 'Submit',
      CLICK: 'Click',
      OPEN: 'Open',
      CLOSE: 'Close',
      ERROR: 'Error',
    };
  }

  static sendEvent(category, action, label) {
    if (!FireAnalytics.isSetup) {
      return;
    }
    ga('send', 'event', category, action, label);
  }
}
