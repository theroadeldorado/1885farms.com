import $ from 'jquery';

import { FireComponent, FireAnalytics } from '@base';

export class SocialShare extends FireComponent {
  constructor(id) {
    super(id);
  }

  get elements() {
    return {
      $facebook: $(`${this.componentSelector}[data-share="facebook"]`),
      $twitter: $(`${this.componentSelector}[data-share="twitter"]`),
    };
  }

  _initEventListeners() {
    this.elements.$facebook.on('click', () => {
      document.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(location.href)}`, '', 'width=626,height=436');
      FireAnalytics.sendEvent(FireAnalytics.category.BUTTONS, FireAnalytics.action.CLICK, 'social-share: Facebook');
    });

    this.elements.$twitter.on('click', () => {
      document.open(`http://twitter.com/share?url=${encodeURIComponent(location.href)}`, '', 'width=626,height=300');
      FireAnalytics.sendEvent(FireAnalytics.category.BUTTONS, FireAnalytics.action.CLICK, 'social-share: Twitter');
    });
  }

  init() {
    if (!this.componentExists) return;
    this._initEventListeners();
  }
}
