import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/index.js'
import { createPinia } from 'pinia'
import AppLayout from "./Layouts/AppLayout.vue";
import '../css/main.css'

const pinia = createPinia();

createInertiaApp({
    resolve: (name) => resolvePageComponent(
        `./Pages/${name}.vue`,
        import.meta.glob('./Pages/**/*.vue')
    ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(pinia)
            .component('Link', Link)
            .component('AppLayout', AppLayout)
            .mount(el)
    },
})
