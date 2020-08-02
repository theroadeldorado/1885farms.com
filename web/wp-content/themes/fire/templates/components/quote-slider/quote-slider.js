import $ from 'jquery';
import { FireComponent } from '@base';

export class PostsSlider extends FireComponent {
  constructor(id) {
    super(id);
  }

  get elements() {
    return {
      $track: this.findElement('track'),
      $item: this.findElement('item'),
      $prev: this.findElement('prev'),
      $next: this.findElement('next'),
    };
  }

  _scroll() {
    if (this.elements.$item.length <= 1) {
      this.elements.$prev.addClass('hidden');
      this.elements.$next.addClass('hidden');
    }
    this.elements.$next.on('click', (e) => {
      this.elements.$track.scrollLeft(this.elements.$track.scrollLeft() + this.elements.$item.width());
    });
    this.elements.$prev.on('click', (e) => {
      this.elements.$track.scrollLeft(this.elements.$track.scrollLeft() - this.elements.$item.width());
    });
  }

  init() {
    if (!this.componentExists) return;
    this._scroll();
  }
}
