const Searchup = () => {
    let filter = document.getElementById('myInput').value.toUpperCase();
    let ul = document.getElementById('myUL');
    let p = document.getElementsByTagName('p');
    for (var i = 0; i < p.length; i++) {
        let a = p[i].getElementsByTagName('a')[0];
        let textvalue = a.innerHTML || a.textContent;
        if (textvalue.toUpperCase().indexOf(filter) > -1) {
            p[i].style.display = '';
        } else {
            p[i].style.display = 'none';
        }
    }
}

document.getElementById("myInput").onclick = function() {
    document.getElementById("searchlist").style.display = "block";
    document.getElementById("icon9").style.display = "block";
}

document.getElementById("icon9").onclick = function() {
    document.getElementById("myInut").style.display = "none";
}


function payment() {
    window.location.assign('http://localhost/Carbazaar/appointment.php');
}

function notify() {
    alert("Notify You When Car is Launched");
}