import Vue from 'vue'

import store from './store';
import VuexPersist from 'vuex-persist'

new VuexPersist({
    key: 'mp3quran.net',
    storage: window.localStorage,
    //filter: (mutation) => {
        //return (mutation.type === 'setInitial')
      //}
}).plugin(store)

import Flipbook from 'flipbook-vue'
Vue.component('flipbook', Flipbook);

import VueClipboard from 'vue-clipboard2'
Vue.use(VueClipboard)

import Hls from 'hls.js'
window.Hls = Hls;
//window.Hls = Hls
import VueDPlayer from 'vue-dplayer'
import 'vue-dplayer/dist/vue-dplayer.css'
Vue.component('d-player', VueDPlayer);

import ScaleLoader from 'vue-spinner/src/ScaleLoader.vue'
Vue.component('scale-loader', ScaleLoader);

import VueYouTubeEmbed from 'vue-youtube-embed'
Vue.use(VueYouTubeEmbed)


