const app = new Vue ({
    el: "#app",
    data: {
        database: [],
    },
    created() {
        axios.get("./backend.php").then((response) => {
            this.database = response.data;
        })
    }

});