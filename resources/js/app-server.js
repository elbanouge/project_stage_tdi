import app from './app';
import renderVueComponentToString from 'vue-server-renderer/basic';

app.$router.push(context.url);


// Set vuex data
app.$store.commit('setStats', { stats: context.stats });
app.$store.commit('setSettings', { settings: context.settings });
app.$store.commit('setLanguages', { languages: context.languages });
app.$store.commit('setCurrentLanguages', { current_language: context.current_language });
app.$store.commit('setPageTitle', { page_title: context.page_title });
app.$store.commit('setTrans', { trans: context.trans });
app.$store.commit('setMainMenu', { main_menu: context.main_menu });



//set index data
if (context.page == 'home') {
    app.$store.commit('index/setReads', { reads: context.reads })
    app.$store.commit('index/setRewayat', { rewayat: context.rewayat })
}

if (context.page == 'search') {
    app.$store.commit('search/setVideos', { videos: context.videos });
    app.$store.commit('search/setReciters', { reciters: context.reciters });
    app.$store.commit('search/setRadios', { radios: context.radios });
    app.$store.commit('search/setTvs', { tvs: context.tvs });
    app.$store.commit('search/setReads', { reads: context.reads });
}

if (context.page == 'tvs') {
    app.$store.commit('tv/setTvs', { tvs: context.tvs })
}
if (context.page == 'apps') {
    app.$store.commit('app/setApps', { apps: context.apps })
}
if (context.page == 'videos') {
    app.$store.commit('video/setVideos', { videos: context.videos })
}
if (context.page == 'video') {
    app.$store.commit('video/setVideo', { video: context.video })
}
if (context.page == 'radios') {
    app.$store.commit('radio/setRadios', { radios: context.radios })
}
if (context.page == 'mushaf') {
    app.$store.commit('mushaf/setMushafPages', { mushaf_pages: context.mushaf_pages })
}
if (context.page == 'alkahf') {
    app.$store.commit('mushaf/setAlkahfPages', { alkahf_pages: context.alkahf_pages })
}
if (context.page == 'reciters') {
    app.$store.commit('reciter/setReciters', { reciters: context.reciters })
    app.$store.commit('reciter/setLetters', { letters: context.letters })

}
if (context.page == 'reciter') {
    app.$store.commit('reciter/setReads', { reads: context.reciter_reads })
    app.$store.commit('reciter/setReciter', { reciter: context.reciter })
}
if (context.page == 'page') {
    app.$store.commit('page/setData', { page_content: context.page_content })
}

renderVueComponentToString(app, (err, res) => {
    if (err) {
      throw new Error(err);
  }
  dispatch(res);
  });


  