var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        try{
            var res = JSON.parse(this.responseText);
        }catch (error){
            res = ""
        }
        if (res !==""){
            var list = document.createElement('ul');
            var lenght = 80;

            res.forEach(function (res) {
                var div = document.createElement('div');
                div.className = 'post';
                var a = document.createElement('a');
                a.href = "posts/" + res.title + ".html";
                var h2 = document.createElement('h2');
                h2.className = 'title';
                h2.href = "posts/" + res.title + ".html";
                h2.innerHTML = res.title;
                var img = document.createElement('img');
                img.className = 'img';
                img.href = "posts/" + res.title + ".html";
                img.src = res.img_path
                var p = document.createElement('p');
                p.className = 'desc';
                p.href = "posts/" + res.title + ".html";
                p.innerHTML = res.post.lenght < lenght ? res.post.substring(0, length - 3) + "..." : res.post;
                a.appendChild(h2);
                a.appendChild(img);
                a.appendChild(p);
                div.appendChild(a);
                list.appendChild(div);
            });
            document.querySelector('#body').appendChild(list);
        }
        else{
            window.location.replace("backend/starter-data.php");
        }
    }
  };

  document.onreadystatechange = function () {
    if (document.readyState == "interactive") {
        xhttp.open("GET", "backend/get-posts.php", true);
        xhttp.send();
    }
}
