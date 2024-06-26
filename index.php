<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div id="app">
        <section class="bg-info-subtle d-flex justify-content-center align-items-center">
            <div class="container p-3 m-5 row gap-3 bg-primary-subtle rounded-4 justify-content-center">
                <div v-for="disc in discs" class="card col-6" style="width: 18rem;">
                    
                    <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{disc.title}}</li>
                        <li class="list-group-item">{{disc.author}}</li>
                        <li class="list-group-item">{{disc.year}}</li>
                    </ul>
                    
                </div>
            </div>
        

        </section>

    </div>
    <script src="js/script.js"></script>
</body>
</html>