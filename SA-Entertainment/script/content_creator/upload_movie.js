function validateTitle() {
    var title = document.getElementById('title').value;
    if(title == null || title == undefined || title == '') {
      alert('Title is required');
      return;
    }
    if(title.length < 2) {
      alert('Title should be at least 2 characters long');
      return;
    }
}

function validateAuthor() {
  var author = document.getElementById('author').value;
  if(author == null || author == undefined || author == '') {
    alert('Author is required');
    return;
  }
}

function validateGenre() {
    var genre = document.getElementById('genre').value;
    if(genre == null || genre == undefined || genre == '') {
      alert('genre is required');
      return;
    }
}

function validateMovieFile() {
    var movieFile = document.getElementById('movieFile').value;
    if(movieFile == null || movieFile == undefined || movieFile == '') {
      alert('movieFile is required');
      return;
    }
}