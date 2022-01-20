const app = new Vue ({
    el: "#app",
    data: {
        database: [],
        selez: '',
    },
    methods: {
        change() {
            axios.get("./backend.php", {
                params: {
                    selezione: this.selez
                }
            }            
            
            ).then((response) => {
                this.database = response.data;
            })
        }
    },
    created() {
        axios.get("./backend.php", {
            params: {
                selezione: this.selez
            }
        }            
        
        ).then((response) => {
            this.database = response.data;
        })
    },
});