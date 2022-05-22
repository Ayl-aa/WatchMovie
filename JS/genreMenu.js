



/*--------------------------- NB alea ---------------------------------------------------*/
function nb_aleatoire(min, max)
{
     var nb = min + (max-min+1)*Math.random();
     return Math.floor(nb);
}


//-----------------------------------------------------------------------------------------------
function recupIdGenre(id){

    
    $.get("  https://api.themoviedb.org/3/discover/movie?api_key=93536a4648a2f2ab923edc1f9f063b20&with_genres="+id,afficherParGenre);
   
    z

}

function myFunction() {
    var x = document.getElementById("mySelect").value;
    console.log(x);
  }

//-----------------------------------------------------------------------------------------------
function afficherParGenre(data){

    console.log(data);

    let texteHTML="";
    
    for(i=0 ; i<data.results.length ; i++){
   
    
        //DEBUT
        texteHTML+='<div class="movie-card">';
        texteHTML+='<div class="container">';
   
        texteHTML+='<img src="https://image.tmdb.org/t/p/w500'+data.results[i].poster_path+'" alt="cover" class="cover" />'; //image fond
             
        texteHTML+='<div  class="hero">';
    
  
       texteHTML+='<div  class="heroHeader"  style="background-image: url(https://image.tmdb.org/t/p/w500'+data.results[i].backdrop_path+')"></div>';
        
        texteHTML+='<div  class="details">';
        
        texteHTML+='<div class="title1">'+data.results[i].title +'</div>'; //tittle et pegi  
        
        
//
       
         //

        texteHTML+='<span class="likes">'+data.results[i].vote_count+' likes</span>'; //nb likes       
      
        texteHTML+='</div>';
                    
        texteHTML+='</div>';
                  
        texteHTML+='<div class="description">';
                    
        texteHTML+='<div class="column1">';
   
        //----------------genre--------------------//

     let type =[];
       
    for(b=0 ; b<data.results[i].genre_ids.length ; b++){
        for(a=0 ; a<tabType.length ; a++){
            
            if(data.results[i].genre_ids[b] == tabType[a].id){
                type.push( tabType[a].name);
            
            }
            
        }     
}

for(c=0 ; c<type.length; c++){
            texteHTML+='<span class="tag">'+type[c]+'</span>';
            
}
        texteHTML+='</div>';
                    
        texteHTML+='<div class="column2">';
                   
        texteHTML+='<p>'+data.results[i].overview+'</p>';
        texteHTML+='<iframe style="display:none;" name="target"></iframe>'
        texteHTML+='<button onclick="recupIdFilm('+data.results[i].id+')" target="target">Ajouter aux favoris</button>';
               //description     
        texteHTML+='</div>';
        texteHTML+='</div>';
                  
                 
        texteHTML+='</div>';
        texteHTML+=' </div>';
        //FIN 
    }

    $("#zoneCardFilmParGenre").html(texteHTML);
}



//faire base de données

var tabType =[];

function recupType(data){

  
    for(i=0 ; i<data.genres.length ; i++){
       tabType.push( data.genres[i]);
       
    } 
     
    
}



function recupIdFilm(data){

    var idFilmRecup = data;
    console.log(idFilmRecup);
    document.cookie = 'idFilmRecup = '+data;
    document.location.href="./PHP/envoiFavoris.php"; 

}


