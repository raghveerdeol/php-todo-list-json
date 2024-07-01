<?php 
// Descrizione
// Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo.
// Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.
// Stack
// Html, CSS, VueJS (importato tramite CDN), axios, PHP
// Consigli
// Nello svolgere l’esercizio seguite un approccio graduale.
// Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
// Lo step successivo è quello di “testare" l'invio di un nuovo task, sapendo che manca comunque la persistenza lato server (ancora non memorizzate i dati da nessuna parte).
// Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
// Bonus (facoltativo)
// Mostrare lo stato del task → se completato, barrare il testo Permettere di segnare un task come completato facendo click sul testo
// Permettere il toggle del task (completato/non completato) Abilitare l’eliminazione di un task
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <main>
        <div id="app">
            <h1>Aggiungi attività</h1>
            <form action="./index.php" method="get" class="new-task">
                <div>
                    <label for="orario">Orario: </label>
                    <input type="text" name="orario" id="orario" v-model="orario">
                </div>
                <div>
                    <label for="attività">Attività: </label>
                    <input type="text" name="attività" id="attività" v-model="attività">
                </div>
                <input type="submit" class="btn">
            </form>
            <select name="filtra" id="filtra" v-model="stato" @click="getData(stato)">
                <option value="" selected>Tutti</option>
                <option value="svolto" > Svolto </option>
                <option value="da svolgere"> Da svolgere </option>
            </select>
            <h2>To Do list</h2>
            <div class="list">
                <div>
                    <h3>orario</h3>
                    <p v-for="singolaAttività in listaAttività">
                        {{ singolaAttività.orario }}
                    </p>
                </div>
                <div>
                    <h3>Attività</h3>
                    <p  v-for="singolaAttività in listaAttività">
                    {{ singolaAttività.attività }}
                    </p>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>