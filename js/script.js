const { createApp } = Vue;

createApp({
  data() {
    return {
      todoList : [],
    }
  },

  methods: {
    getList(){
      // richiesta axios per ricevere dal file server.php
      axios.get('./server.php').then(res => {
        console.log(res.data)
        this.todoList = res.data
      })
    }
  },

  mounted() {
    this.getList()
  },
  
}).mount('#app')