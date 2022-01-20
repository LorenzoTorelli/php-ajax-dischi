<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div id="app">
        <div class="main-container">
            <div class="filter-bar">
                <select name="genere" id="genere" v-model="selez" @change = "change" >
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                    <option value="" selected="selected">All</option>
                </select>
            </div>
            <div class="disc-container">
                <div class="card" v-for="(el, index) in database" :key = "index">
                    <div class="img-container">
                        <img :src="el.poster" alt="">
                    </div>
                    <div class="text">
                        <h4>{{el.title}}</h4>
                        <h5>{{el.author}}</h5>
                        <p>{{el.year}}</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>

    <script src="javascript/main.js"></script>
</body>
</html>