



/*--------------------------- NB alea ---------------------------------------------------*/
function nb_aleatoire(min, max)
{
     var nb = min + (max-min+1)*Math.random();
     return Math.floor(nb);
}



//-----------------------------------------------------------------------------------------------

function traiterBase(){ //bug si ca existe pas rien ne s'affiche 

    $.get(" https://api.themoviedb.org/3/genre/movie/list?api_key=93536a4648a2f2ab923edc1f9f063b20",recupType);
   
    
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


