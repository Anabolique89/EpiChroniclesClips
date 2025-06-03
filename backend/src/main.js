import "./assets/main.css";
import "./index.css";
import { createApp } from "vue";
import App from "./App.vue";
import store from "./store";
import router from "./router";
// import CKEditor from "@ckeditor/ckeditor5-vue";

createApp(App)
    .use(store)
    .use(router)
    // .use(CKEditor)
    .mount("#app");
