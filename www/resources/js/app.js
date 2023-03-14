require('./bootstrap');


Echo.channel('laravel_database_translation.1').listen('.MessageSend', (e) => {
    console.log(e);
});
window.Vue = require('vue').default;
import { createApp } from "vue";
const app = createApp({});
app.component('translation-component', require('./components/TranslationComponent.vue'));
