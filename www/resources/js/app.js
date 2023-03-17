require('./bootstrap');


window.Vue = require('vue').default;
import { createApp } from "vue";
const app = createApp({});
app.component('translation-component', require('./components/TranslationComponent.vue'));
