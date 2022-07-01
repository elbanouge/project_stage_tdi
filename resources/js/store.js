import Vue from 'vue'
import Vuex from 'vuex'
import user from './modules/user'
Vue.use(Vuex)

export default new Vuex.Store({
  modules: {
    user,
  },

  state: {
    current_menu: {
      name: '',
      id: '',
      location: '',
    },
    initial: true,
    stats: {},
    settings: {},
    languages: [],
    current_language: '',
    page_title: '',
    trans: {},
    main_menu: [],
    posts_metas: [],
    last_comments: [],
    last_news: [],
    loading: false,
  },
  getters: {
    getTrans: (state) => (string, args) => {
      var string = string.split(".");
      let value = state.trans[string[0]][string[1]];
      if (value) {
        for (var arg in args) {
          value = value.replace(`:${arg}`, args[arg]);
        }
      } else {
        value = string['1'];
      }

      return value
    },
  },

  mutations: {
    setStats(state, { stats }) {
      state.stats = stats;
    },
    setInitial(state, { initial }) {
      state.initial = initial;
    },
    setSettings(state, { settings }) {
      state.settings = settings;
    },
    setLanguages(state, { languages }) {
      state.languages = languages;
    },
    setCurrentLanguages(state, { current_language }) {
      state.current_language = current_language;
    },
    setPageTitle(state, { page_title }) {
      state.page_title = page_title;
    },
    setTrans(state, { trans }) {
      state.trans = trans;
    },
    setMainMenu(state, { main_menu }) {
      state.main_menu = main_menu;
    },
    changelaoding(state, { loading }) {
      state.loading = loading;
    },
    setPostsMetas(state, { posts_metas }) {
      state.posts_metas = posts_metas;
    },
    setLastNews(state, { last_news }) {
      state.last_news = last_news;
    },
    setLastComments(state, { last_comments }) {
      state.last_comments = last_comments;
    },
    appendPostsMetas(state, { posts_metas }) {
      Object.assign(state.posts_metas, posts_metas)
    },
  },
});
