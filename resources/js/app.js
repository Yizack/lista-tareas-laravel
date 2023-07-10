import "./bootstrap";
import { createApp } from "vue";
import App from "./App.vue";
import "bootstrap/dist/css/bootstrap.min.css";
import "./../css/theme-light.css";
import "./../css/theme-dark.css";
import "./../css/app.css";
import "./../css/buttons.css";

const app = createApp(App);
app.mount("#app");
