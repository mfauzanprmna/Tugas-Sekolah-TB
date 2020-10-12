var nama = [];
var kode = [];
var jenis = [];
var awal = [];
var waktu = [];
var total = [];
var bayar = [];
var kembalian;
var tampil = document.getElementById('tampilan');

function ps2() {
    date = new Date();
    jam = date.getHours();
    menit = date.getMinutes();
    document.getElementById('kode').value = "1" || "2" || "3" || "4" || "5"
    document.getElementById('jenis').value = "Ps 2";
    document.getElementById('harga').value = 5000;
    document.getElementById('awal').value = jam + " : " + menit;
}

// Function untuk Fungsi pada tombol Card
function ps3() {
    date = new Date();
    jam = date.getHours();
    menit = date.getMinutes();
    document.getElementById('kode').value = "6" || "7" || "8"
    document.getElementById('jenis').value = "Ps 3";
    document.getElementById('harga').value = 10000;
    document.getElementById('awal').value = jam + " : " + menit;
}

function ps4() {
    date = new Date();
    jam = date.getHours();
    menit = date.getMinutes();
    document.getElementById('kode').value = "9" || "10"
    document.getElementById('jenis').value = "Ps 4";
    document.getElementById('harga').value = 13000;
    document.getElementById('awal').value = jam + " : " + menit;
}

// Funnction untuk menampilkan Output Tabel
function show() {
    tampil.innerHTML = '';
    for (i = 0; i < nama.length; i++) {

        var waktusewa = Number(waktu[i]);
        if (waktusewa > 10) {
            var totali = Number(waktu[i]) + 1;
        } else if (waktusewa > 4) {
            var totali = Number(waktu[i]);
        } else {
            var totali = Number(waktu[i]);
        }

        kembalian = bayar[i] - total[i];

        const RP = "Rp. "
        const jam = " jam";
        const nomor = i + 1;
        tampil.innerHTML += '<tr>' +
            '<td>' + nomor + '</td>' +
            '<td>' + kode[i] + '</td>' +
            '<td>' + nama[i] + '</td>' +
            '<td>' + jenis[i] + '</td>' +
            '<td>' + awal[i] + '</td>' +
            '<td>' + totali + jam + '</td>' +
            '<td>' + RP + total[i] + '</td>' +
            '<td>'+ RP + bayar[i] + '</td>'+
            '<td>'+ RP + kembalian + '</td>'+
            '<td>' +
            '<button class="btna edit" onclick="edit(' + i + ')">Edit</button>' +
            '<button class="btna hapus" onclick="hapus(' + i + ')">Hapus</button>' +
            '<button class="btna details" data-toggle="modal" data-target="#modal" onclick="detail(' + i + ')">Details</button>' +
            '</td>' +
            '</tr>'
    }
}
show();

// Function untuk fungsi Tombol Simpan pada Form Input Sewa
function add() {
    var namabaru = document.getElementById('pembeli').value;
    var kodebaru = document.getElementById('kode').value;
    var jenisbaru = document.getElementById('jenis').value;
    var awalbaru = document.getElementById('awal').value;
    var waktubaru = document.getElementById('jam').value;
    var hargabaru = document.getElementById('total').value;
    var bayarbaru = document.getElementById('bayar').value;

    nama.push(namabaru);
    kode.push(kodebaru);
    jenis.push(jenisbaru);
    awal.push(awalbaru);
    waktu.push(waktubaru);
    total.push(hargabaru);
    bayar.push(bayarbaru);

    show();

    document.getElementById('pembeli').value = '';
    document.getElementById('kode').value = '';
    document.getElementById('jenis').value = '';
    document.getElementById('awal').value = '';
    document.getElementById('jam').value = '';
    document.getElementById('total').value = '';
    document.getElementById('bayar').value = '';
}

function hitung() {
    var harg = document.getElementById('harga').value;
    var sew = document.getElementById('jam').value;
    var waktusewa = Number(sew);
    if (waktusewa > 10) {
        var hargasewa = (Number(harg) * Number(sew)) - (Number(harg) * Number(sew) * Number(0.1))
    } else if (waktusewa > 4) {
        var hargasewa = (Number(harg) * Number(sew)) - (Number(harg) * Number(sew) * Number(0.1))
    } else {
        var hargasewa = Number(harg) * Number(sew);
    }
    document.getElementById('total').value = hargasewa;
    total.push(hargasewa)
    document.getElementById('harga').value = '';
}

var index = []

// Function untuk Fungsi edit pada Tabel Output
function edit(id) {
    document.getElementById('kode').value = kode[id];
    document.getElementById('pembeli').value = nama[id];
    document.getElementById('jenis').value = jenis[id];
    document.getElementById('awal').value = awal[id];
    document.getElementById('jam').value = waktu[id];
    document.getElementById('total').value = total[id];
    document.getElementById('bayar').value = bayar[id];

    index.push(id)
}

function datasimpan() {
    var simpankode = document.getElementById('kode').value;
    var simpannama = document.getElementById('pembeli').value;
    var simpanjenis = document.getElementById('jenis').value;
    var simpanawal = document.getElementById('awal').value;
    var simpanjam = document.getElementById('jam').value;
    var simpanharga = document.getElementById('total').value;
    var simpanbayar = document.getElementById('bayar').value;

    kode[index] = simpankode;
    nama[index] = simpannama;
    jenis[index] = simpanjenis;
    awal[index] = simpanawal;
    waktu[index] = simpanjam;
    total[index] = simpanharga;
    bayar[index] = simpanbayar;

    document.getElementById('kode').value = '';
    document.getElementById('pembeli').value = '';
    document.getElementById('jenis').value = '';
    document.getElementById('awal').value = '';
    document.getElementById('jam').value = '';
    document.getElementById('total').value = '';
    document.getElementById('bayar').value = '';

    show();
    index.pop();
}

// Function untuk Fungsi Hapus pada Tabel Output
function hapus(id) {
    var hilang = confirm("Anda yakin ingin menghapus barang ini ?")
    if (hilang == true) {
        kode.splice(id, 1);
        nama.splice(id, 1);
        jenis.splice(id, 1);
        awal.splice(id, 1);
        waktu.splice(id, 1);
        total.splice(id, 1);
        bayar.splice(id,1);
    } else {
        kode[id]
        nama[id]
        jenis[id]
        awal[id]
        waktu[id]
        total[id]
        bayar[id]
    }

    show();
}

// Function untuk Otomatis mengisi Data
function billing() {
    var billing = document.getElementById('kode').value;
    var ps = '';
    var ht = 0.0
    var dates = new Date();
    var james = dates.getHours();
    var minuts = dates.getMinutes();
    switch (billing) {
        case "1":
            ps = "Ps 2";
            ht = 5000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "2":
            ps = "Ps 2";
            ht = 5000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "3":
            ps = "Ps 2";
            ht = 5000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "4":
            ps = "Ps 2";
            ht = 5000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "5":
            ps = "Ps 2";
            ht = 5000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "6":
            ps = "Ps 3";
            ht = 10000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "7":
            ps = "Ps 3";
            ht = 10000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "8":
            ps = "Ps 3";
            ht = 10000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "9":
            ps = "Ps 4";
            ht = 13000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        case "9":
            ps = "Ps 4";
            ht = 13000;
            document.getElementById('awal').value = james + " : " + minuts;
            break;
        default:
            break;
    }
    document.getElementById('jenis').value = ps;
    document.getElementById('harga').value = ht;
}

var indes = []

// Function untuk Fungsi detail pada Tabel Output
function detail(id) {
    var waktusew = Number(waktu[id]);
    if (waktusew > 10) {
        var totalis = Number(waktu[id]) + 1;
    } else if (waktusew > 4) {
        var totalis = Number(waktu[id])
    } else {
        var totalis = Number(waktu[id]);
    }
    var datess = new Date();
    tanggal = datess.getDate();
    bulan = datess.getMonth();
    tahun = datess.getFullYear()
    document.getElementById('kodes').value = kode[id];
    document.getElementById('names').value = nama[id];
    document.getElementById('jeniss').value = jenis[id];
    document.getElementById('awals').value = awal[id];
    document.getElementById('waktu').value = totalis + " Jam";
    document.getElementById('hargas').value = total[id];
    document.getElementById('bayaran').value = bayar[id];
    document.getElementById('kembalian').value = kembalian[id];
    document.getElementById('tanggal').value = tanggal + "-" + "0" + bulan + "-" + tahun;

    indes.push(id);
}