const { createApp } = Vue;

createApp({
  data() {
    return {
      todoList : [],
      newTodoAdd : "",
    }
  },

  methods: {
    getList(){
      // richiesta axios per ricevere dal file server.php
      axios.get('./server.php').then(res => {
        console.log(res.data)
        this.todoList = res.data
      })
    },

    addTodo() {
      // const newTodo = {
      //   name : this.newTodo,
      //   fatto : false
      // }
      // this.todoList.push(newTodo)

      // this.newTodo = ''
      let data = {
        newTodo : this.newTodoAdd,
      };

      axios.post('./server.php' , data, {headers: {'Content-Type': 'multipart/form-data'}}).then(res => {
        this.getList()
      })
    },
  },

  mounted() {
    this.getList()
  },
  
}).mount('#app')