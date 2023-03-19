require('./bootstrap');
import { createApp } from "vue";
import App from './components/TranslationComponent'
//window.Vue = require('vue').default;

createApp(App).mount('#app');
//app.component('translation-component', require('./components/TranslationComponent.vue'));
