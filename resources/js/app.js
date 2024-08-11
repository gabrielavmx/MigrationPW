import './bootstrap';

import Alpine from 'alpinejs';

import Cleave from 'cleave.js';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', function () {
    var telInput = document.getElementById('tel');
    var cleave = new Cleave(telInput, {
      phone: true,
      phoneRegionCode: 'BR'
    });
  });