$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
  $("#loading").hide(); // Kita sembunyikan dulu untuk loadingnya
  
$("#pesawat").change(function(){ // Ketika user mengganti atau memilih data pesawat
    $("#kodes").hide(); // Sembunyikan dulu combobox kode nya
    $("#loading").show(); // Tampilkan loadingnya
  
    $.ajax({
      type: "POST", // Method pengiriman data bisa dengan GET atau POST
      url: "option.php", // Isi dengan url/path file php yang dituju
      data: {pesawat : $("#pesawat").val()}, // data yang akan dikirim ke file yang dituju
      dataType: "json",
      beforeSend: function(e) {
        if(e && e.overrideMimeType) {
          e.overrideMimeType("application/json;charset=UTF-8");
        }
      },
      success: function(response){ // Ketika proses pengiriman berhasil
        $("#loading").hide(); // Sembunyikan loadingnya
        // set isi dari combobox kode
        // lalu munculkan kembali combobox kodenya
        $("#kodes").html(response.data_kode).show();
      },
      error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
        alert(thrownError); // Munculkan alert error
      }
    });
    });
});