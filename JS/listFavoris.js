var tabType =[];

function recupDataType(){

    $.get("./PHP/recupListFilm.php",recupListe);
    $.get(" https://api.themoviedb.org/3/genre/movie/list?api_key=93536a4648a2f2ab923edc1f9f063b20",recupType);
   }
   
   function recupType(data){
   
     
       for(i=0 ; i<data.genres.length ; i++){
          tabType.push( data.genres[i]);
          
       } 
       console.log(tabType);
   
       console.log(tabType[0].id)
   }






let list;
//-----------------------------------------------------------------------------------------------
function recupListe(data){
     
    for(i=0 ; i<data.length ; i++){
     
       
        $.get(" https://api.themoviedb.org/3/movie/"+data[i]+"?api_key=93536a4648a2f2ab923edc1f9f063b20",afficherListeFav);
        }

       
    }

//-----------------------------------------------------------------------------------------------
let txtHTML = "";
function afficherListeFav(data){
 
  
 
  

    txtHTML+='<div class="movie-card">';
    txtHTML+='<div class="container">';
    txtHTML+='<img src="https://image.tmdb.org/t/p/w500'+data.poster_path+'" alt="cover" class="cover" />'; //image fond    
    txtHTML+='<div  class="hero">';
    txtHTML+='<div  class="heroHeader"  style="background-image: url(https://image.tmdb.org/t/p/w500'+data.backdrop_path+')"></div>';
    txtHTML+='<div  class="details">';
    txtHTML+='<div class="title1">'+data.title +'</div>'; //tittle et pegi  
    txtHTML+='<span class="likes">'+data.vote_count+' likes</span>'; //nb likes       
    txtHTML+='</div>';
    txtHTML+='</div>';
    txtHTML+='<div class="description">';
    txtHTML+='<div class="column1">';

    //----------------genre--------------------//

    let type = [];
    
    for(b=0 ; b<data.genres.length ; b++){
        for(a=0 ; a<tabType.length ; a++){
            
            if(data.genres[b].id == tabType[a].id){
                type.push( tabType[a].name);
            
            }
            
        }
        
       }
    
       console.log(type);
       
    for(c=0 ; c<type.length; c++){
         txtHTML+='<span class="tag">'+type[c]+'</span>';
         
    }

  

    //-----------------------------------------//

    txtHTML+='</div>';
    txtHTML+='<div class="column2">';
    txtHTML+='<p>'+data.overview+'</p>';
    txtHTML+='<iframe style="display:none;" name="target"></iframe>';
    txtHTML+='<button onclick="recupIdFilm('+data.id+')" target="target">Supprimer des favoris</button>';
    txtHTML+='</div>';
    txtHTML+='</div>';
    txtHTML+='</div>';
    txtHTML+=' </div>';
    //FIN 




$("#zoneFilmListe").html(txtHTML);
 

}  

function recupIdFilm(data){

    var idFilmRecup = data;
    console.log(idFilmRecup);
    document.cookie = 'idFilmRecupSupp = '+data;
    document.location.href="./PHP/suppFav.php"; 
    

}

