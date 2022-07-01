import Vue from 'vue'
import App from './components/App.vue'
import store from './store';
import router from './router';


if (typeof window !== 'undefined') {
    require('./bootstrap');
    require('./sticky-kit');
    require('./main');
    require('./no-ssr');
    window.Event = new Vue();
}
require('./icons');

Vue.prototype.trans = (string, args) => {
    return store.getters.getTrans(string, args);
};
Vue.prototype.ajax_prefix = '/ajax';
Vue.prototype.prefix ='/' +  store.state.current_language +'/';

import VueProgressBar from 'vue-progressbar'

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})

import UniqueId from 'vue-unique-id';
Vue.use(UniqueId);

import VueYouTubeEmbed from 'vue-youtube-embed'
Vue.use(VueYouTubeEmbed);

import NoSSR from "vue-no-ssr";
Vue.use(NoSSR);


var SocialSharing = require('vue-social-sharing');
Vue.use(SocialSharing);

import VueMeta from 'vue-meta'
Vue.use(VueMeta)

if (typeof window !== 'undefined') {
    Vue.component('loading-spinner', require('./components/partials/LoadingSpinner.vue').default);
    Vue.prototype.scrollToTop = (x, y) => window.scrollTo(x, y);  

    Vue.directive('click-outside', {
        bind: function (el, binding, vnode) {
          el.clickOutsideEvent = function (event) {
            // here I check that click was outside the el and his childrens
            if (!(el == event.target || el.contains(event.target))) {
              // and if it did, call method provided in attribute value
              vnode.context[binding.expression](event);
            }
          };
          document.body.addEventListener('click', el.clickOutsideEvent)
        },
        unbind: function (el) {
          document.body.removeEventListener('click', el.clickOutsideEvent)
        },
      });
}




Vue.component('loading-error', require('./components/partials/LoadingError.vue').default);
Vue.component('confirmation', require('./components/partials/Confirmation.vue').default);
Vue.component('share', require('./components/partials/Share.vue').default);
Vue.component('search-form', require('./components/partials/SearchForm.vue').default);


Vue.component('audio-player', require('./components/partials/AudioPlayer.vue').default);
Vue.component('mobile-player', require('./components/partials/MobilePlayer.vue').default);
Vue.component('desktop-player', require('./components/partials/DesktopPlayer.vue').default);
Vue.component('sora', require('./components/partials/Sora.vue').default);
Vue.component('read', require('./components/partials/Read.vue').default);

Vue.component('card-reciter', require('./components/reciter/Item.vue').default);
Vue.component('card-radio', require('./components/radio/Item.vue').default);
Vue.component('card-tv', require('./components/tvs/Item.vue').default);
Vue.component('card-video', require('./components/videos/Item.vue').default);


Vue.component('loader-simple', require('./components/loaders/Simple.vue').default);
Vue.component('loader-simpleb', require('./components/loaders/SimpleB.vue').default);
Vue.component('loader-simpled', require('./components/loaders/SimpleD.vue').default);
Vue.component('loader-video', require('./components/loaders/Video.vue').default);
Vue.component('loader-author', require('./components/loaders/Author.vue').default);
Vue.component('loader-simplevs', require('./components/loaders/SimpleVs.vue').default);
Vue.component('loader-mobile', require('./components/loaders/Mobile.vue').default);
Vue.component('loader-simples', require('./components/loaders/SimpleS.vue').default);
Vue.component('loader-simplev', require('./components/loaders/SimpleV.vue').default);
Vue.component('loader-simplec', require('./components/loaders/SimpleC.vue').default);
Vue.component('loader-simplep', require('./components/loaders/SimpleP.vue').default);
Vue.component('loader-simplepo', require('./components/loaders/SimplePo.vue').default);
Vue.component('loader-simplef', require('./components/loaders/SimpleF.vue').default);

Vue.component('mobile', require('./components/Mobile.vue').default);
Vue.component('desktop', require('./components/Desktop.vue').default);
export default new Vue({
    store,
    router,
    render: h => h(App),
});