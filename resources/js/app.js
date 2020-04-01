    import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.config.productionTip = false

    import { BModal, VBModal, BootstrapVue } from 'bootstrap-vue'
    import 'bootstrap/dist/css/bootstrap.css'
    import 'bootstrap-vue/dist/bootstrap-vue.css'

    Vue.use(VueRouter, BootstrapVue, BModal, VBModal)

    import App from './views/App'
    import Welcome from './views/Welcome'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'home',
                component: Welcome
            },
        ],
    });

    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });
