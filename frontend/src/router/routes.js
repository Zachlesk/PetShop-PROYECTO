import { createMemoryHistory, createRouter } from "vue-router";

import Introduction from "../views/Introduction.vue";
// import App from "../App.vue";
import Login from "../views/Login.vue";

const routes = [
  {
    path: "/",
    name: 'principal',
    component: Login,
  },
  {
    path: "/introduction",
    name: 'introduction',
    component: Introduction,
  },
];

export const router = createRouter({
  history: createMemoryHistory(),
  routes,
});

router.beforeEach(async (to, from) => {
  console.log(to);
});
