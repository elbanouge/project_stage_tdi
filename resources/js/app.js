import Vue from 'vue'
import store from './store';


require('./bootstrap');
require('./main');
require('./icons');

window.Event = new Vue();

Vue.prototype.trans = (string, args) => {
    let value = _.get(window.trans, string, string);
    _.eachRight(args, (paramVal, paramKey) => {
      value = _.replace(value, `:${paramKey}`, paramVal);
    });
    return value;
   };
Vue.component('notifications', require('./components/partials/Notifications.vue').default);
Vue.component('confirmation', require('./components/partials/Confirmation.vue').default);
Vue.component('poll', require('./components/partials/Poll.vue').default);
// Vue.component('video-pl', require('./components/Video.vue').default);
// Vue.component('comments', require('./components/comment/Comments.vue').default);
// Vue.component('comment', require('./components/comment/Comment.vue').default);


import VuePictureSwipe from 'vue-picture-swipe';
Vue.component('vue-picture-swipe', VuePictureSwipe);

import { ShareNetwork } from 'vue-social-sharing' ;
Vue.component('share-network', ShareNetwork)

import VueYouTubeEmbed from 'vue-youtube-embed'
Vue.use(VueYouTubeEmbed)

import VueIziToast from 'vue-izitoast';
import 'izitoast/dist/css/iziToast.min.css';
Vue.use(VueIziToast);


const app = new Vue({
    el: '#app',
    store,
});
