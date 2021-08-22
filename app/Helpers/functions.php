<?php

function getMovieId($id= '637649'){
    $movie = `curl --location --request GET 'https://api.themoviedb.org/3/movie/$id?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR'`;
    echo $movie;
}

function getMovieList(){
    $movieList = `curl --location --request GET 'https://api.themoviedb.org/3/movie/popular?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR'`;
}