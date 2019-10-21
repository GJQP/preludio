
window.Vue = require('vue');

Vue.component('admin-menu2', require('./components/admin_menu.vue').default);

const admin_menu2 = new Vue({
    el: '#adminmenu2',
});
