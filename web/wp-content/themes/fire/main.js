import $ from 'jquery';
import '@base/polyfills';
import 'alpinejs/dist/alpine-ie11';
import balanceText from 'balance-text';
import 'slick-carousel';
import AOS from 'aos';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import googleCalendarPlugin from '@fullcalendar/google-calendar';

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

  var calendarEl = document.getElementById('calendar');
  let calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin, googleCalendarPlugin],
    googleCalendarApiKey: 'AIzaSyCky0tuWulffU8xL94w0spHK_oeUYPYvXE',
    events: {
      googleCalendarId: 'lhajtht1tpjt8hbciua33tuk2b03bcle@import.calendar.google.com',
    },
  });
  calendar.render();
};

// fire all scripts
$(document).ready(onPageReady);
