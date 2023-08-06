function tampilkanSemuaMenu() {
  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    $.each(menu, function (i, data) {
      $("#daftar-menu").append(
        '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' +
          data.gambar +
          '" class="card-img-top"><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><h5 class="card-title">Rp. ' +
          data.harga +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>'
      );
    });
  });
}

tampilkanSemuaMenu();

$(".nav-link").on("click", function () {
  $(".nav-link").removeClass("active"); //untuk menambahkan link aktive pada tiap nav-link
  $(this).addClass("active");

  let kategori = $(this).html(); //untuk membuat menu pada h1 sesuai dengan navbar yang dipilih
  $("h1").html(kategori);

  if (kategori == "All menu") {
    // $("$daftar-menu").html("");
    tampilkanSemuaMenu();
    return;
  }

  $.getJSON("data/pizza.json", function (data) {
    let menu = data.menu;
    let content = " ";

    $.each(menu, function (i, data) {
      if (data.kategori == kategori.toLowerCase()) {
        content +=
          '<div class="col-md-4"><div class="card mb-3"><img src="img/menu/' +
          data.gambar +
          '" class="card-img-top"><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><h5 class="card-title">Rp. ' +
          data.harga +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>';
      }
    });
    $("#daftar-menu").html(content);
  });
});