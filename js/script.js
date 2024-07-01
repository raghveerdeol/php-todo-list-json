const { createApp } = Vue;
createApp({
    data() {
        return {
            listaAttività: [],
        }
    },
    methods: {
        getData() {
            axios.get('./server.php', {
                params: {
                    
                }
            })
            .then((response) => {
                // console.log(response.data);
                response.data.forEach(element => {
                    this.listaAttività.push(element);
                });
            })
            .catch(function (error) {
                console.log(error);
            })
            .finally(function () {
                // always executed
            });  
        },
    },
    created(){
        this.getData();
    }
}).mount('#app')