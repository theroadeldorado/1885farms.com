import $ from 'jquery';
import '@base/polyfills';
import 'alpinejs/dist/alpine-ie11';
import balanceText from 'balance-text';
import 'slick-carousel';
import AOS from 'aos';
import { Calendar } from '@fullcalendar/core';
import listPlugin from '@fullcalendar/list';
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
    eventSources: [
      {
        googleCalendarId: 'lhajtht1tpjt8hbciua33tuk2b03bcle@import.calendar.google.com',
        className: 'the-house bg-secondary-500 border-none text-white',
      },
      {
        googleCalendarId: 'nvnt6eevons0abl2b0469flr64@group.calendar.google.com',
        className: 'the-barn bg-accent-500 border-none text-primary-500',
      },
    ],
    eventDisplay: 'block',
    eventContent: 'Reserved',
    eventClick: function (info) {
      info.jsEvent.preventDefault();
    },
  });
  calendar.render();

  var listEl = document.getElementById('list');
  let list = new Calendar(listEl, {
    plugins: [listPlugin, googleCalendarPlugin],
    initialView: 'listWeek',
    googleCalendarApiKey: 'AIzaSyCky0tuWulffU8xL94w0spHK_oeUYPYvXE',
    eventSources: [
      {
        googleCalendarId: 'lhajtht1tpjt8hbciua33tuk2b03bcle@import.calendar.google.com',
        className: 'the-house bg-secondary-500 border-none text-white',
      },
      {
        googleCalendarId: 'nvnt6eevons0abl2b0469flr64@group.calendar.google.com',
        className: 'the-barn bg-accent-500 border-none text-primary-500',
      },
    ],
    eventDisplay: 'block',
    eventContent: 'Reserved',
    eventClick: function (info) {
      info.jsEvent.preventDefault();
    },
    height: 'auto',
  });
  list.render();
};

// function updateDates(dates, string) {
//   dates.forEach((date) => {
//     date.innerHTML = string;
//   });
// }

// setTimeout(function () {
//   const houseDates = document.querySelectorAll('.the-house .fc-event-title');
//   const barnDates = document.querySelectorAll('.the-barn .fc-event-title');
//   const buttons = document.querySelectorAll('.fc-button');
//   updateDates(houseDates, 'House Reserved');
//   updateDates(barnDates, 'Barn Reserved');
//   $('[data-calendar]').removeClass('opacity-0');
//   buttons.forEach((button) => {
//     button.addEventListener('click', () => {
//       updateDates(houseDates, 'House Reserved');
//       updateDates(barnDates, 'Barn Reserved');
//     });
//   });
// }, 1000);

// fire all scripts
$(document).ready(onPageReady);
