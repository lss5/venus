import './bootstrap';
import.meta.glob([
    '../fonts/**',
    '../images/**',
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
