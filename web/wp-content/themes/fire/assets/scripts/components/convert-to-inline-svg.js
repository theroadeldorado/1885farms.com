import { FireComponent, FireHelpers } from '@base';

/**
 * @type public
 * @name ConvertToInlineSvg
 * @description
 *
 * Converts a source into an inline SVG
 * More information: https://github.com/skycatchfire/fire/issues/68
 *
 **/
export class ConvertToInlineSvg extends FireComponent {
  constructor(id) {
    super(id);
  }

  get url() {
    return this.$component.attr('data-src');
  }

  get classes() {
    return this.$component.attr('class');
  }

  get color() {
    return this.$component.attr('data-color') ? this.$component.attr('data-color') : null;
  }

  init() {
    if (!this.componentExists) return;
    FireHelpers.convertSourceToSVG(this.$component, this.url, this.color, this.classes);
  }
}
