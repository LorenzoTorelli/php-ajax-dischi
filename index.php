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
        <div class="filter-bar">

        </div>
        <div class="disc-container">
            <div v-for="(el, index) in database" :key = "index">
                <img :src="el.poster" alt="">
            </div>
        </div>
       
    </div>

    <script src="javascript/main.js"></script>
</body>
</html>