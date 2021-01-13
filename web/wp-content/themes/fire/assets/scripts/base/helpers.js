import $ from 'jquery';

/**
 * @type public
 * @name screenSizes
 * @description
 *
 * Defines screen sizes
 *
 **/
export const breakpoints = {
  xs: 576,
  sm: 768,
  md: 992,
  lg: 1200,
};

/**
 * @type public
 * @name isDesktop
 * @description
 *
 * Check for desktop breakpoint
 *
 * @return {Boolean}
 *
 **/
export function isDesktop() {
  return window.matchMedia(`(min-width: ${breakpoints.md + 1}px)`).matches;
}

/**
 * @type public
 * @name isTablet
 * @description
 *
 * Check for tablet breakpoint
 *
 * @return {Boolean}
 *
 **/
export function isTablet() {
  return window.matchMedia(`(min-width: ${breakpoints.sm + 1}px)`).matches && window.matchMedia(`(max-width: ${breakpoints.md}px)`).matches;
}

/**
 * @type public
 * @name isMobile
 * @description
 *
 * Check for mobile breakpoint
 *
 * @return {Boolean}
 *
 **/
export function isMobile() {
  return window.matchMedia(`(max-width: ${breakpoints.sm - 1}px)`).matches;
}

/**
 * @type public
 * @name windowMatchesMaxWidthQuery
 * @description
 *
 * Check for specific media query
 *
 * @param {String}
 * @return {Boolean}
 *
 **/
export function windowMatchesMaxWidthQuery(mediaQuery) {
  return window.matchMedia(mediaQuery).matches;
}

/**
 * @type public
 * @name unsetTabIndex
 * @requires jQuery
 * @description
 *
 * Remove tabindex from element
 *
 * @param {Element}
 * @return {Void}
 *
 **/
export function unsetTabIndex(element) {
  $(element).attr('tabindex', '');
}

/**
 * @type public
 * @name setTabIndex
 * @requires jQuery
 * @description
 *
 * Set tabindex on element
 *
 * @param {Element}
 * @param {Number}
 * @return {Void}
 *
 **/
export function setTabIndex(element, index) {
  $(element).attr('tabindex', index);
}

/**
 * @type public
 * @name getPageType
 * @description
 *
 * Checks body class for page type
 *
 * @return {String} page type
 *
 **/
export function getPageType() {
  const prefix = 'fire-page-type--';
  const bodyClasses = Array.from(document.body.classList);
  const [type] = bodyClasses.filter((item) => item.includes(prefix));
  const cleanType = type.replace(prefix, '');
  return cleanType;
}

/**
 * @type public
 * @name lockBody
 * @requires jQuery
 * @description
 *
 * Locks/unlocks body element where it currently is
 * Allows you to manually pass value or uses scrollTop.
 * Uses animate with step function to handle refresh issues.
 *
 * @param {Boolean} lock
 * @return {Void}
 *
 **/
export function lockBody(lock) {
  const $body = $('body');

  if (lock === true) {
    $body.css({ overflow: 'hidden' });
  } else if (lock === false) {
    $body.removeAttr('style');
  }

  $body.attr('data-fire-lock-body', lock);
}

/**
 * @type public
 * @name lockBodyToggle
 * @requires jQuery
 * @description
 *
 * Toggles the body lock
 *
 * @return {Void}
 *
 **/
export function lockBodyToggle() {
  const status = $('body').attr('data-fire-lock-body');

  if (status === undefined || status === 'false') {
    lockBody(true);
  } else {
    lockBody(false);
  }
}

/**
 * @type public
 * @name capitalizeFirstLetter
 * @description
 *
 * Captilizes the first letter of a string
 *
 * @param {Boolean}
 * @return {Void}
 *
 **/
export function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

/**
 * @type public
 * @name clearFragment
 * @description
 *
 * Removes everything after and including # from URL
 *
 * @return {Void}
 *
 **/
export function clearFragment() {
  history.pushState('', document.title, window.location.pathname + window.location.search);
}

/**
 * @type public
 * @name shuffle
 * @description
 *
 * Fisher-Yates (aka Knuth) Shuffle.
 *
 * @param {Array} array
 * @return {Array}
 *
 **/
export function shuffle(array) {
  let currentIndex = array.length;
  let temporaryValue;
  let randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {
    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

/**
 * @type public
 * @name generateUniqueId
 * @description
 *
 * Generates a unique string
 *
 * @param {Array} array
 * @return {Array}
 *
 **/
export function generateUniqueId() {
  return shuffle(btoa(Math.random()).toLowerCase().replace(/=/, '').split('')).join('');
}

/**
 * @type public
 * @name addScript
 * @description
 *
 * Dynamically adds script tag to page
 *
 * @param {Object} attribute
 * @param {String} text
 * @param {Function} callback
 * @return {Void}
 *
 **/
export function addScript(attribute, text, callback) {
  const script = document.createElement('script');
  for (const attr in attribute) {
    script.setAttribute(attr, attribute[attr] ? attribute[attr] : null);
  }
  script.innerHTML = text;
  script.onload = callback;
  document.body.appendChild(script);
}

/**
 * @type public
 * @name convertSourceToSVG
 * @description
 *
 * Converts a source into an inline SVG
 *
 * @param {Object} target
 * @param {String} url
 * @param {String} color
 * @param {String} classes
 * @param {String} id
 * @return {Void}
 *
 **/
export function convertSourceToSVG(target, url, color, classes) {
  const fileExtension = url.split('.').pop();

  if (fileExtension !== 'svg') return;

  $.get(url, (data) => {
    let $svg = $(data).find('svg');

    // re-appends classes
    if (classes) {
      $svg.attr('class', classes);
    }

    // manually sets viewBox so SVG can be scaled
    if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
      $svg.attr('viewBox', `0 0 ${$svg.attr('height')} ${$svg.attr('width')}`);
    }

    if (color) {
      const svgPathes = $svg.find('g, path');

      svgPathes.each((index, path) => {
        const fill = $(path).attr('fill');
        const stroke = $(path).attr('stroke');

        if (fill !== undefined && fill.indexOf('#') > -1) {
          $(path).attr('fill', color);
        }

        if (stroke !== undefined && stroke.indexOf('#') > -1) {
          $(path).attr('stroke', color);
        }
      });
    }

    target.replaceWith($svg);
  });
}

/**
 * @type public
 * @name iOSFixDoubleTap
 * @description
 *
 * Fixes double tap issue on iOS devices
 *
 * @param {Array} array
 * @return {Array}
 *
 **/
export function iOSFixDoubleTap() {
  $('button, a').on('touchstart', (event) => {
    const $target = $(event.currentTarget);
    $target.is(':focus') ? $target.blur() : $target.focus();
  });
}

/**
 * @type public
 * @name findVisibleSection
 * @description
 *
 * @param {Element} element
 * @return {Element}
 *
 **/
export function findVisibleSection(element) {
  return element.is(':hidden') || element.hasClass('gap') ? findVisibleSection(element.next()) : element;
}

/**
 * @type public
 * @name moveBootstrapModalsToBody
 * @description
 *
 * Moves modal to body on open.
 *
 * @return {Void}
 *
 **/
export function moveBootstrapModalsToBody() {
  $('.modal-dialog')
    .parent()
    .on('show.bs.modal', (e) => {
      $(e.relatedTarget.attributes['data-target'].value).appendTo('body');
    });
}

/**
 * @type public
 * @name ignoreContext
 * @description
 *
 * Ignores context and stops Drupal behavior triggers
 *
 * @param {Element} context
 * @param {Array} elementsToIgnore
 * @return {Boolean}
 *
 **/
export function ignoreContext(context, elementsToIgnore) {
  let ignore = false;

  elementsToIgnore.forEach((element) => {
    if ($(context).is(element)) {
      ignore = true;
      return false;
    }
  });

  return ignore;
}
