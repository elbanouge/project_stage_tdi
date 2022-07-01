import app from './app';

app.$store.commit('setStats', { stats: window.stats });
app.$store.commit('setSettings', { settings: window.settings });
app.$store.commit('setLanguages', { languages: window.languages });
app.$store.commit('setCurrentLanguages', { current_language: window.current_language });
app.$store.commit('setPageTitle', { page_title: window.page_title });
app.$store.commit('setTrans', { trans: window.trans });
app.$store.commit('setMainMenu', { main_menu: window.main_menu });

//set index data
if (window.page == 'home') {
    app.$store.commit('index/setReads', { reads: window.reads })
    app.$store.commit('index/setRewayat', { rewayat: window.rewayat })
}

if (window.page == 'search') {
    app.$store.commit('search/setVideos', { videos: window.videos });
    app.$store.commit('search/setReciters', { reciters: window.reciters });
    app.$store.commit('search/setRadios', { radios: window.radios });
    app.$store.commit('search/setTvs', { tvs: window.tvs });
    app.$store.commit('search/setReads', { reads: window.reads });
}

if (window.page == 'tvs') {
    app.$store.commit('tv/setTvs', { tvs: window.tvs })
}
if (window.page == 'apps') {
    app.$store.commit('app/setApps', { apps: window.apps })
}
if (window.page == 'videos') {
    app.$store.commit('video/setVideos', { videos: window.videos })
}
if (window.page == 'video') {
    app.$store.commit('video/setVideo', { video: window.video })
}
if (window.page == 'radios') {
    app.$store.commit('radio/setRadios', { radios: window.radios })
}
if (window.page == 'mushaf') {
    app.$store.commit('mushaf/setMushafPages', { mushaf_pages: window.mushaf_pages })
}
if (window.page == 'alkahf') {
    app.$store.commit('mushaf/setAlkahfPages', { alkahf_pages: window.alkahf_pages })
}
if (window.page == 'reciters') {
    app.$store.commit('reciter/setReciters', { reciters: window.reciters })
    app.$store.commit('reciter/setLetters', { letters: window.letters })

}
if (window.page == 'reciter') {
    app.$store.commit('reciter/setReads', { reads: window.reciter_reads })
    app.$store.commit('reciter/setReciter', { reciter: window.reciter })
}
if (window.page == 'page') {
    app.$store.commit('page/setPage', { page_content: window.page_content })
}



app.$mount('#app', true);