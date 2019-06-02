const state = {
    user: {
        id: 9000,
        name: ''
    }
}

const getters = {};

const actions = {};

const mutations = {
    GET_USER(state, user) {
        state.user = user;
    },

    UPDATE_USER(state, user) {
        state.user.push((user));
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
