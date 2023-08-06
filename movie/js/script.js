function searchMovie(){
    $('#movie-list').html('');
    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey' :'be94942e',
            's': $('#search-input').val()
        },
        success: function(result){
            if(result.Response == "True"){
                let movies = result.Search;
                $.each(movies, function(i, data){
                    $('#movie-list').append(`
                    <div class="col-md-4"
                        <div class="card mb-3">
                            <img src="`+ data.Poster +`" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">`+ data.Title +`</h5>
                                <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
                                <a href="#" class="btn btn-dark see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`">Details</a>
                            </div>
                        </div>
                    </div>
                  `);
                });

                $('#search-input').val('');

            }else{
                $('#movie-list').html(`
                <div class="col">
                    <h1 class="text-center">` + result.Error + `</h1>
                </div>
                `)
            }
        }
    });
}


function tampil(){
    
}

$('#search-button').on('click', function(){
    searchMovie();
});

$('#search-input').on('keyup', function(event){
    if(event.keyCode === 13){
        searchMovie();
    }
});


$('#movie-list').on('click', '.see-detail', function(){
    
    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey': 'be94942e',
            'i': $(this).data('id')
        },
        success: function(movie){
            if(movie.Response === "True"){
                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="`+ movie.Poster +`" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item"><h2>`+ movie.Title +`</h2></li>
                                    <li class="list-group-item">Released :`+ movie.Released +`</li>
                                    <li class="list-group-item">Genre :`+ movie.Genre +`</li>
                                    <li class="list-group-item">Actor :`+ movie.Actors +`</li>
                                    <li class="list-group-item">Durasi :`+ movie.Runtime +`</li>
                                    <li class="list-group-item">Director :`+ movie.Director +`</li>
                                    <li class="list-group-item">Pengarang :`+ movie.Writer +`</li>
                                    <li class="list-group-item">Plot :`+ movie.Plot +`</li>
                                    <li class="list-group-item">Bahasa :`+ movie.Language +`</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `)
            }
        }
    });
});