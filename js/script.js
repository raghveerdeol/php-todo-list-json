const { createApp } = Vue;
createApp({
    data() {
        return {
            orario: [],
            attività: [],
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
                    this.orario.push(element.orario);
                    this.attività.push(element.attività);
                });
                console.log(this.orario);
                console.log(this.attività);
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