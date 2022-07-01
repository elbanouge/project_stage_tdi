export default {
    namespaced: true,
    state: {
        user: false,
    },
    mutations: {
        setUser(state, { user }) {
            state.user = user;
        },
    },
    actions: {
        setData({ commit }, vm) {
            if (vm.initial) {
                commit('setInitial', { initial: false }, { root: true })
                commit("changelaoding", { loading: false }, { root: true });
                vm.$Progress.finish();
            } else {
                axios.get(vm.url).then(function (response) {
                    commit('setUsers', { users: response.data.users })
                    commit('setPageTitle', { page_title: response.data.page_title }, { root: true })
                    commit('changelaoding', { loading: false }, { root: true })
    
                    vm.$Progress.finish();
                }).catch(function (error) {
                    vm.$Progress.fail()
                });
            }

            
        },
        setItem({ commit }, vm) {
            if (vm.initial) {
                commit('setInitial', { initial: false }, { root: true })
                commit("changelaoding", { loading: false }, { root: true });
                vm.$Progress.finish();
            } else {
                axios.get(vm.url).then(function (response) {
                    commit('setUser', { user: response.data.user })
                    commit('setPageTitle', { page_title: response.data.page_title }, { root: true })
                    commit('changelaoding', { loading: false }, { root: true })
    
                    vm.$Progress.finish();
                }).catch(function (error) {
                    vm.$Progress.fail()
                });
            }

            
        },
        unsetData({ commit }, url) {
            commit('setUsers', { users: [] })
        },
        unsetItem({ commit }, url) {
            commit('setUser', { user: {} })
        }
    },
}
