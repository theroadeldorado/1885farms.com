import $ from 'jquery';
import { Calendar } from '@fullcalendar/core';
import listPlugin from '@fullcalendar/list';
import dayGridPlugin from '@fullcalendar/daygrid';
import googleCalendarPlugin from '@fullcalendar/google-calendar';
import { FireComponent } from '@base';

export class Cal extends FireComponent {
  constructor(id) {
    super(id);
  }

// {
//   googleCalendarId: 'lhajtht1tpjt8hbciua33tuk2b03bcle@import.calendar.google.com',
//   className: 'the-house bg-secondary-500 border-none text-white',
// },
// {
//   googleCalendarId: 'fvhoh6j1r27bs1d6ecuooot3mk6g9fo8@import.calendar.google.com',
//   className: 'the-house bg-secondary-500 border-none text-white',
// },

// for list section
//  {
//           googleCalendarId: 'lhajtht1tpjt8hbciua33tuk2b03bcle@import.calendar.google.com',
//           className: 'the-house bg-secondary-500 border-none text-white',
//         },

  _cal() {
    var calendarEl = document.getElementById('calendar');
    let calendar = new Calendar(calendarEl, {
      plugins: [dayGridPlugin, googleCalendarPlugin],
      googleCalendarApiKey: 'AIzaSyCky0tuWulffU8xL94w0spHK_oeUYPYvXE',
      eventSources: [
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
  }

  init() {
    if (!this.componentExists) return;
    this._cal();
  }
}
