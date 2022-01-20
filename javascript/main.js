const app = new Vue ({
    el: "#app",
    data: {
        database: [],
        selez: '',
    },
    created() {
        axios.get("./backend.php").then((response) => {
            this.database = response.data;
        })
    },

    
    computed: {
        filtraSchede() {
            return this.database.filter( (e) => {
                if (e.genre.toLowerCase().includes(this.selez.toLowerCase())) {
                return e;
                }
            })
        }
    }

});