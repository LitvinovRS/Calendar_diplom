function myFunction(){
    var input, filter, ul, li, i, p;
    input = document.getElementById("search");
    filter = window.document.getElementById('search');
    ul = document.getElementById("task__list");
    li = ul.getElementsByTagName("li");

    for(i = 0; i < li.length; i++){
        p = li[i].getElementsByTagName("p")[0];
        if (p.innerHTML.indexOf(filter) > 1){
            li[i].style.display = "";
        }else{
            li[i].style.display = "none";
        }
    }
}