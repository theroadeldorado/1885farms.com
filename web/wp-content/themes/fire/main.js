import $ from 'jquery';
import '@base/polyfills';
import 'alpinejs/dist/alpine-ie11';
import balanceText from 'balance-text';
import 'slick-carousel';
import AOS from 'aos';
import { FireDetect, FireComponentRecord, FireLazyLoader, FireHelpers } from '@base';

const detect = new FireDetect();
const componentRecord = new FireComponentRecord();
const lazyLoader = new FireLazyLoader();

/**
 * @type function
 * @name onPageReady
 * @description
 *
 * Initialize scripts when page is ready
 *
 **/
const onPageReady = () => {
  detect.setHtmlClasses();
  detect.detectTrueViewHeight();
  lazyLoader.init();
  lazyLoader.observer.observe();
  componentRecord.registerAllComponents();
  FireHelpers.moveBootstrapModalsToBody();

  if (detect.touch && (detect.platform === 'iPhone' || detect.platform === 'iPad')) {
    FireHelpers.iOSFixDoubleTap();
  }

  balanceText();

  // if (FireHelpers.isDesktop()) {
  //   AOS.init();
  // }
};

// fire all scripts
$(document).ready(onPageReady);
