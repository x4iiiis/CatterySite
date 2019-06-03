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
        state.user.id = user.id;
        state.user.name = user.name;
        console.log("UPDATING USER");
    }
}

export default {
    state,
    getters,
    actions,
    mutations
}
