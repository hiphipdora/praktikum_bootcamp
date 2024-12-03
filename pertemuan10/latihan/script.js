const list = document.getElementById("movie-list");

for(const movie of movies){
    const li = document.createElement('li');
    li.textContent = `${movie.name} - ${movie.genre}`;
    list.appendChild(li);
}
