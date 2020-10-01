var loadMore = document.querySelector(".trie button"),
    gallery = document.querySelector('.gallery-container')


loadMore.addEventListener('click', function(){
  
    if (gallery.style.maxHeight) {
        gallery.style.maxHeight = null;
        loadMore.innerHTML = "LOAD MORE"
    } else {
        gallery.style.maxHeight = gallery.scrollHeight + "px";
        loadMore.innerHTML = "HIDE"
      } 
})