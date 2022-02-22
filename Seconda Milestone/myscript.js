const app = new Vue({
    el: "#app",
    data: {
        disks:[],
        newInput:'',
        genere:[]
    },
    
    created(){
    this.getInfo();
    
    },
    
    methods:{
      filterGenre:function(){

              
              console.log(this.newInput)
          },
    getInfo(){
        axios.get('http://localhost:8888/php-ajax-dischi/Seconda%20Milestone/api.php', {
        
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