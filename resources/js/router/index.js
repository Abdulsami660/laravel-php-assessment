import { createRouter, createWebHistory } from "vue-router";
import frontView from "../components/pages/frontView.vue";
import ProductView from "../components/pages/ProductView.vue";
import ProductDetailView from "../components/pages/ProductDetailView.vue";
const routes = [
    { path: "/", name: "homepage", component: frontView },
    { path: "/admin/products", name: "products", component: ProductView },
    {
        path: "/products/:id/detail",
        name: "product-detail",
        component: ProductDetailView,
    },
];

const router = createRouter({
    // 4. Provide the history implementation to use. We
    // are using the hash history for simplicity here.
    history: createWebHistory(),
    routes, // short for `routes: routes`
});

export default router;
