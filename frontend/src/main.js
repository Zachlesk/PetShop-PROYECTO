import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { router } from './router/routes'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap"

const app = createApp(App)
app.use(router)
app.mount('#app')
