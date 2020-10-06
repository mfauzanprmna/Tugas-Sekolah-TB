var nama = [];
var kode = [];
var jenis = [];
var awal = [];
var kembali = [];
var waktu = [];
var harga = [];
var tampil = document.getElementById('tampilan');

function show() {
    tampil.innerHTML = '';
    for (i = 0; i < nama.length; i++) {

        var waktusewa = Number(waktu[i]);
        if (waktusewa > 4) {
            var total = Number(waktu[i]) + 1;
        } else {
            var total = Number(waktu[i]);
        }

        const SR = "SR - "
        const jam = " jam";
        const nomor = i + 1;
        tampil.innerHTML += '<tr>' +
            '<td>' + nomor + '</td>' +
            '<td>' + kode[i] + SR + '</td>' +
            '<td>' + nama[i] + '</td>' +
            '<td>' + jenis[i] + '</td>' +
            '<td>' + awal[i] + '</td>' +
            '<td>' + kembali[i] + '</td>' +
            '<td>' + total + +'</td>' +
            '<td>' + harga[i] * waktu[i] + '</td>' +
            '</tr>'
    }
}
show();

function add() {
    var namabaru = document.getElementById('pembeli').value;
    var kodebaru = document.getElementById('kode').value;
    var jenisbaru = document.getElementById('jenis').value;
    var awalbaru = document.getElementById('awal').value;
    var kembalibaru = document.getElementById('kembali').value;
    var waktubaru = document.getElementById('jam').value;
    var hargabaru = document.getElementById('harga').value;

    nama.push(namabaru);
    kode.push(kodebaru);
    jenis.push(jenisbaru);
    awal.push(awalbaru);
    kembali.push(kembalibaru);
    waktu.push(waktubaru);
    harga.push(hargabaru);

    show();

    document.getElementById('nama').value = '';
    document.getElementById('kode').value = '';
    document.getElementById('jenis').value = '';
    document.getElementById('awal').value = '';
    document.getElementById('kembali').value = '';
    document.getElementById('jam').value = '';
    document.getElementById('harga').value = '';
}

function hitungtotal() {
    var kodes = 0.0;
    var nama = (document.form.nama.value);
    var sewa = parseFloat(document.form.jam.value);
    var ht = 0.0;
    var jenis = (document.form.jenis.value);
    var awal = (document.form.awal.value);
    var kembali = (document.form.kembali.value);

    if (jenis == "Ps 2") {
        ht = 5000;
    } else if (jenis == "Ps 3") {
        ht = 10000;
    } else {
        ht = 13000;
    }
    harga.value = ht;

    document.form.harga.value = eval(ht);
}