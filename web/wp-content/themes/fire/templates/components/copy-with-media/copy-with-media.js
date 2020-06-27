import $ from 'jquery';
import 'slick-carousel';
import { FireComponent } from '@base';

export class CopyWithMedia extends FireComponent {
  constructor(id) {
    super(id);
  }

  get elements() {
    return {
      $slider: this.findElement('slider'),
    };
  }

  get options() {
    return {
      slidesToShow: 1,
      slidesToScroll: 1,
      accessibility: true,
      arrows: false,
      dots: true,
    };
  }

  _initSlider() {
    this.elements.$slider.slick(this.options);
  }

  init() {
    if (!this.componentExists) return;
    this._initSlider();
  }
}
