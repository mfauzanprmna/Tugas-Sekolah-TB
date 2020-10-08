var nama = [];
var kode = [];
var jenis = [];
var awal = [];
var kembali = [];
var waktu = [];
var harga = [];
var tampil = document.getElementById('tampilan');

function ps2() {
    date = new Date();
    jam = date.getHours();
    menit = date.getMinutes();
    document.getElementById('jenis').value = "Ps 2";
    document.getElementById('harga').value = 5000;
    document.getElementById('awal').value = jam + " : " + menit;
}

function ps3() {
    date = new Date();
    jam = date.getHours();
    menit = date.getMinutes();
    document.getElementById('jenis').value = "Ps 3";
    document.getElementById('harga').value = 10000;
    document.getElementById('awal').value = jam + " : " + menit;
}

function ps4() {
    date = new Date();
    jam = date.getHours();
    menit = date.getMinutes();
    document.getElementById('jenis').value = "Ps 4";
    document.getElementById('harga').value = 13000;
    document.getElementById('awal').value = jam + " : " + menit;
}

function show() {
    tampil.innerHTML = '';
    for (i = 0; i < nama.length; i++) {

        var waktusewa = Number(waktu[i]);
        if (waktusewa > 10) {
            var total = Number(waktu[i]) + 1;
            var hargasewa = (Number(harga[i]) * Number(waktu[i])) - (Number(harga[i]) * Number(waktu[i]) * Number(0.2))
        } else if (waktusewa > 4) {
            var total = Number(waktu[i]) + 1;
            var hargasewa = (Number(harga[i]) * Number(waktu[i])) - (Number(harga[i]) * Number(waktu[i]) * Number(0.1))
        } else {
            var total = Number(waktu[i]);
            var hargasewa = Number(harga[i]) * Number(waktu[i]);
        }

        const RP = "Rp. "
        const SR = "SR - "
        const jam = " jam";
        const nomor = i + 1;
        tampil.innerHTML += '<tr>' +
            '<td>' + nomor + '</td>' +
            '<td>' + SR + kode[i] + '</td>' +
            '<td>' + nama[i] + '</td>' +
            '<td>' + jenis[i] + '</td>' +
            '<td>' + awal[i] + '</td>' +
            '<td>' + kembali[i] + '</td>' +
            '<td>' + total + jam + '</td>' +
            '<td>' + RP + hargasewa + '</td>' +
            '<td>' +
            '<button class="btn edit">Edit</button>' +
            '<button class="btn hapus">Hapus</button>' +
            '<button class="btn details">Details</button>' +
            '</td>' +
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

function edit(id) {

}

function hitungtotal() {

    var tujuan = document.getElementById('jenis').value;
    var ht = 0.0
    if (tujuan == "") {
        ht = 0;
    } else if (tujuan == "Ps 2") {
        ht = 5000;
    } else if (tujuan == "Ps 3") {
        ht = 10000;
    } else {
        ht = 13000;
    }

    document.getElementById('harga').value = ht;
}