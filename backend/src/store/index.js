import { createStore } from "vuex";
import * as actions from "./actions.js";
import * as mutations from "./mutations.js";
const store = createStore({
    state: {
        user: {
            token: sessionStorage.getItem("TOKEN"),
            // token: 1234,
            data: {},
        },
    },
    getters: {},
    actions,
    mutations,
});

export default store;
