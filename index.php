<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- imporot axios tramite cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <!-- importo vue tramite cdn -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


</head>

<body>

  <div id="app">

    <div class="container">

      <ul>
        <li v-for="todo in todoList">
          {{ todo.name }}
        </li>
      </ul>
    </div>


    <div class="container">
      <input v-model="newTodo" type="text">
      <button @click="addTodo()">Aggiungi</button>
    </div>

  </div>


  <!-- collego il file javascript -->
  <script src="js/script.js"></script>
</body>
</html>