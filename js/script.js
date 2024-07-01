const { createApp } = Vue;
createApp({
    data() {
        return {
            listaAttività: [],
            orario: '',
            attività: '',
            stato: ""
        }
    },
    methods: {
        getData(stato) {
            axios.get('./server.php', {
                params: {
                    stato: stato,
                }
            })
            .then((response) => {
                // console.log(response.data);
                this.listaAttività = response.data;
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