require("./bootstrap");

import Alpine from "alpinejs";

import AddToCart from "./components/AddToCart.vue";

import { createApp } from "vue";

window.Alpine = Alpine;

Alpine.start();

const app = createApp();
app.component("AddToCart", AddToCart);
app.mount("#app");
