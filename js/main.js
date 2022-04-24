import { createApp } from 'vue';
import App from '@/App.vue';
import router from '@/router';
import store from '@/store';

const app = createApp(App);
app.use(router);
app.use(store);

// feature flag directive
app.directive('feature-flag', feature);

router.isReady().then(() => app.mount('#app'));