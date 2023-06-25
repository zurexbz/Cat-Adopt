// filter array 
let filterarray =[];

// gallery card array

let galleryarray = [
    {
        id:1,
        name : "kucing oyen",
        src: "../images/kucing1.png",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:2,
        name : "kucing abu",
        src: "../images/kucing2.png",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:3,
        name : "kucing masjid",
        src: "../images/kucing3.png",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:4,
        name : "kucing persia",
        src: "../images/kucing4.png",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:5,
        name : "kucing british",
        src: "../images/kucing5.png",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    },
    {
        id:6,
        name : "kucing anggora",
        src: "../images/kucing6.png",
        desc : "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi, delectus."
    }
   ];



showgallery(galleryarray);


// create function to show card
function showgallery(curarra){
   document.getElementById("card").innerText = "";
   for(var i=0;i<curarra.length;i++){
       document.getElementById("card").innerHTML += `
        <div class="col-md-4 mt-3" >
           <div class="card p-3 ps-5 pe-5">
               <h4 class="text-capitalize text-center">${curarra[i].name}</h4>

            <img src="${curarra[i].src}" width="100%" height="320px" class="img-fluid"/>
            <p class="mt-2">${curarra[i].desc}</p>
            <button class="btn btn-light w-100 mx-auto">
                <a href="../details_page/details1.html">
                Details Cat
                </a>
            </button>
       
          </div>
          </div>
        `
   }

}

// For Live Searching Product
document.getElementById("myinput").addEventListener("keyup",function(){
    let text = document.getElementById("myinput").value;

    filterarray= galleryarray.filter(function(a){
        if(a.name.includes(text)){
            return a.name;
           }

   });
   if(this.value==""){
       showgallery(galleryarray);
   }
   else{
       if(filterarray == ""){
           document.getElementById("para").style.display = 'block'
           document.getElementById("card").innerHTML = ""; 
       }
       else{

           showgallery(filterarray);
           document.getElementById("para").style.display = 'none'
       }
   }

});