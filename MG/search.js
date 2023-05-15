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
    var a = confirm('You want Test-Driver this Car !!');
    if (a == 1) {
        var b = prompt('Enter Address');
        alert('Appointment is Granted');
        let r = Math.floor(Math.random() * 1000000000);
        alert('Appointment id is :' + r);
    } else {
        alert('Your Request is denied');
    }

}