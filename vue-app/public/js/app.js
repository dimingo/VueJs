

Vue.prototype.$http = axios;

new Vue({
    el: '#app',

    data: {
        skills: []
    },

    mounted() {

        //make an ajax request to our server


        this.$http.get('/skills').then(response => this.skills = response = data);

    }
});