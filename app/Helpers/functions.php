<?php
 
 
function getMovieId($id= '637649'){
    $movie = `curl --location --request GET 'https://api.themoviedb.org/3/movie/$id?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR'`;
    echo $movie;
}

function getMovieList(){
    $movieList = `curl --location --request GET 'https://api.themoviedb.org/3/movie/popular?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR'`;
    $movieArray = json_decode($movieList, true);
    $movies = $movieArray['results'];
    $currentPage = $movieArray['page'];
    $pagesTotal = $movieArray['total_pages'];
    // Compara se $a é maior que $b
    function cmp($a, $b) {
        return $a['title'] > $b['title'];
    }
    // Ordena
    usort($movies, 'cmp');
    print_r( $pagesTotal );
    
}

function getSearchMovieByName($query, $adult = false){
    //$query = "aranha";
    $movieList = `curl --location --request GET 'https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR&page=1&include_adult=$adult&query=$query'`;
    $movieArray = json_decode($movieList, true);
    $movies = $movieArray['results'];
    $currentPage = $movieArray['page'];
    $pagesTotal = $movieArray['total_pages'];
    // Compara se $a é maior que $b
    function cmp($a, $b) {
        return $a['title'] > $b['title'];
    }
    // Ordena
    usort($movies, 'cmp');
    print_r( $movies );
    
}

function getGenre(){
    $getGenres = `curl --location --request GET 'https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR'`;
    $genresArray = json_decode($getGenres, true);
    $genres = $genresArray['genres'];
    // foreach($genres as $item){
    //     foreach($item as $key => $value){
    //         $id = preg_replace('/[^0-9]/', '', $value);
    //         $name =  preg_replace('/[0-9]+/', '', $value);                        
    //     }
                
    // }
    return $genres;
}

function orderByGenre($genre){

}