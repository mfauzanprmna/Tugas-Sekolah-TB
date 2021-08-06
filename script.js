var namaproduk = [];
var hargaproduk = [];
var satuanproduk = [];
var kategoriproduk = [];
var stokawal = [];
var gambarproduk = [];

var tampil = document.getElementById('tampilan');

function show() {
    tampil.innerHTML = '';

    for (i = 0; i < namaproduk; i++) {
        var stok = document.getElementById('stok').value;

        stok = stokawal[i];
        if (stok) {
            var bg = 'red';
        } else {
            var bg = "";
        }

        var nomor = i + 1;
        var kode = "SM-00" + Number(i + 1);
        tampil.innerHTML += "<tr>" +
            "<th>" + nomor + "</th>" +
            "<td>" + kode + "</td>" +
            "<td>" + namaproduk[i] + "</td>" +
            "<td>" + hargaproduk[i] + "</td>" +
            "<td>" + satuanproduk[i] + "</td>" +
            "<td>" + kategoriproduk[i] + "</td>" +
            "<td class='" + bg + "'>" + stokawal[i] + "</td>" +
            "<td>" + "<img src='" + gambarproduk[i] + "' alt='ini foto' width='150px'>" + "</td>" +
            "<td>" +
            "<button class='btn btn-warnig'>Edit</button>" +
            "<button class='btn btn-danger'>Hapus</button>" +
            "</td>" +
            "</tr>" 

    }
}

show()

function add() {
    var addnama = document.getElementById('nama').value;
    var addharga = document.getElementById('harga').value;
    var addsatuan = document.getElementById('satuan').value;
    var addkategori = document.getElementById('kategori').value;
    var addstok = document.getElementById('stok').value;
    var addgambar = document.getElementById('img').value;

    namaproduk.push(addnama);
    hargaproduk.push(addharga);
    satuanproduk.push(addsatuan);
    kategoriproduk.push(addkategori);
    stokawal.push(addstok);
    gambarproduk.push(addgambar);

    show()
}

function hapas(id) {
    var hilang = confirm('Anda yakin ingin mengahapus barang ini ?');
    if (hilang == true) {
        namaproduk.splice(id, 1);
        hargaproduk.splice(id, 1);
        satuanproduk.splice(id, 1);
        kategoriproduk.splice(id, 1);
        stokawal.splice(id, 1);
        gambarproduk.splice (id, 1);
    } else {
        namaproduk[i];
        hargaproduk[i];
        satuanproduk[i];
        kategoriproduk[i];
        stokawal[i];
        gambarproduk[i];
    }

    show()
}

var index = [];

function simpan(id) {

}