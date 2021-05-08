// let mahasiswa = {
//     nama : "Rizwan Gustama",
//     nim : "20180040068",
//     email : "Rizonegustama@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));


let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
        let mahasiswa = JSON.parse(xhr.responseText);
        console.log(mahasiswa);
    }
}

xhr.open('GET','coba.json', true);
xhr.send();