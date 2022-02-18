const app = new Vue({
    el: "#app",
    data: {
        disks:[],
        // newInput:'',
    },
    
    created(){
    this.getInfo();
    
    },
    // computed: {
    //     filteredGenres(){
    //         if(this.newInput == ''){
    //             return this.disks
    //         }
    //         else{
    //             return this.disks.filter( (item) => {
    //                 return item.genre.includes(this.newInput)
                    
    //             });
    //         }
    //     },
        
    // },
    // filterGenre(selected){
        //     this.newInput = selected;
        //     console.log(this.newInput)
        // },
        
    methods:{
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