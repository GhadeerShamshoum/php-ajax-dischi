const app = new Vue({
    el: "#app",
    data: {
        disks:[]
    },
    
    created(){
        this.getInfo();
    },
    methods:{
   
    getInfo(){
        axios.get('http://localhost:8888/api.php', {
        
      })
      .then((response) => {
        this.disks = (response.data);

        
      })
      .catch(function (error) {
        console.log(error);
      })
     
     }
    }
    
})