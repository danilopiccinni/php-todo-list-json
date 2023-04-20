const { createApp } = Vue;

createApp({
  data() {
    return {
      todoList : [],
      newTodo : "",
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
      const newTodo = {
        name : this.newTodo,
        fatto : false
      }
      this.todoList.push(newTodo)

      this.newTodo = ''

    },
  },

  mounted() {
    this.getList()
  },
  
}).mount('#app')