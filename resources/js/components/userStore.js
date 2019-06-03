const state = {
    user: {
        id: 0,
        name: ''
    }
}

const getters = {};

const actions = {};

const mutations = {
    updateUser(state, user) {
        state.user.id = user.id;
        state.user.name = user.name;
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
