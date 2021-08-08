var namabarang = ['Sepatu Nike', 'Sepatu Adidas', 'Sepatu Reebok', 'Sepatu Bata', 'Sepatu Diadora', 'Sepatu Sneaker']
var hargabarang = [300000, 500000, 600000, 100000, 200000, 400000]
var gambarbarang = [
    'https://ecs7.tokopedia.net/img/cache/700/product-1/2018/12/29/40516835/40516835_eb614167-6ca3-48fd-90b6-820ee05b5e52_640_640.jpg',
    'https://i.pinimg.com/originals/31/8a/cf/318acf126ec63bafee06ab94c122f79f.jpg',
    'https://cf.shopee.co.id/file/9ea11c27d260b44952ddacdc1e7dcab3',
    'https://s4.bukalapak.com/img/9585545478/large/BATA_Sepatu_Pria_GARLAND_Black___8216119.jpg',
    'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//95/MTA-3335459/diadora_diadora-sergio-sepatu-lari-_full14.jpg',
    'https://cf.shopee.co.id/file/a782a5b475f99b995245eb4b1a6a11f4'
]

var listproduk = document.getElementById('listproduk');

function showlist() {
    listproduk.innerHTML = ''
    for (let i = 0; i < namabarang.length; i++) {
        listproduk.innerHTML += '<div class="card float-left mr-3 mb-3" style="width: 12.5rem;">'+
            '<img src='+ gambarbarang[i] +' class="card-img-top" alt="..." width="10px">'+
            '<div class="card-body">'+
            '<h5 class="card-title">'+ namabarang[i] +'</h5>'+
                '<p class="card-text">Rp. '+ hargabarang[i] +'</p>'+
                '<a href="#" class="btn btn-primary" onclick="addlist('+i+')">Beli</a>'+
            '</div>'+
        '</div>'
    }
}

function addlist(id) {
    namabarang_keranjang.push(namabarang[id])
    hargabarang_keranjang.push(hargabarang[id])

    showlistkeranjang()
}

var listkeranjang = document.getElementById('listkeranjang');

var namabarang_keranjang = [];
var hargabarang_keranjang = [];
var jumlahbarang_keranjang = [];

var tampildiscount = document.getElementById('diskon')
var tampilpajak = document.getElementById('pajak')
var tampiltotal = document.getElementById('total')

function showlistkeranjang() {
    listkeranjang.innerHTML = ''

    var discount = 0
    var pajak = 0
    var hargatotal = 0
    var total = 0
    for (let i = 0; i < namabarang_keranjang.length; i++) {
        listkeranjang.innerHTML += '<div class="card mt-2 mb-2" style="width: 19,2rem;">'+
            '<div class="card-body">'+
                '<h5 class="card-title">'+ namabarang_keranjang[i] +'</h5>'+
                '<p class="card-text">Rp. '+ hargabarang_keranjang[i] +'</p>'+
                '<p>Qty : 1</p>'+
                '<a href="#" class="btn btn-danger float-right" onclick="deleteitem('+ i +')">Hapus</a>'+
            '</div>'+
        '</div>'
    
        hargatotal = hargabarang_keranjang[i] + hargatotal

        if (hargatotal > 1000000) {
            discount = total * 0.15
        } else {
            discount = 0
        }
    
        total = hargatotal - discount

        pajak = total * 0.1

        var totalharga = total + pajak
        tampilpajak.innerHTML = pajak
        tampildiscount.innerHTML = discount
        tampiltotal.innerHTML = totalharga
        hargatotal_tabel = totalharga

        var jumlahbarang = i + 1;
        jumlahbarang_keranjang = jumlahbarang
    }
}

function deleteitem(id) {
    namabarang_keranjang.splice(id,1)
    hargabarang_keranjang.splice(id,1)

    showlistkeranjang()
}

var tabel = document.getElementById('tabelbelanja');

var namabarang_tabel = [];
var hargabarang_tabel = [];
var jumlahbarang_tabel = [];
var hargatotal_tabel = []
var cash = []

function tabelbelanja() {
    tabel.innerHTML = ''

    for (let i = 0; i < namabarang_tabel.length; i++) {
        var no = i + 1
        var id_belanja = 'SM - ' + no
        var kembalian = cash[i] - hargabarang_tabel[i]
        tabel.innerHTML += '<tr>'+
            '<td>'+no+'</td>'+
            '<td>'+id_belanja+'</td>'+
            '<td>'+nama[i]+'</td>'+
            '<td>'+namabarang_tabel[i]+'</td>'+
            '<td>'+jumlahbarang_keranjang+'</td>'+
            '<td>'+'Rp. '+hargabarang_tabel[i]+'</td>'+
            '<td>'+'Rp. '+cash[i]+'</td>'+
            '<td>'+'Rp. '+kembalian+'</td>'+
        '</tr>'
    }
}

function addtabel() {
    var simpancash = document.getElementById('cash').value

    namabarang_tabel.push(namabarang_keranjang)
    hargabarang_tabel.push(hargatotal_tabel)
    cash.push(simpancash)

    tabelbelanja()

    namabarang_keranjang.splice(0)
    hargabarang_keranjang.splice(0)
    
    listkeranjang.innerHTML = ''
    tampilpajak.innerHTML = ''
    tampildiscount.innerHTML = ''
    tampiltotal.innerHTML = ''
}

function pembayaran() {
    document.getElementById('hargat').value = hargatotal_tabel
}

var namalengkap = document.getElementById('namalengkap')

var nama = []

function button() {
    namalengkap.innerHTML = '<button class="btn btn-outline-light my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#modal">Daftar</button>'
}

function nama0() {
    namalengkap.innerHTML = '<h1>'+nama+'</h1>'
}

function addnama() {
    var simpannama = document.getElementById('nama').value

    nama.push(simpannama)

    nama0()
}


button()
showlist()