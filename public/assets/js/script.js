const swal = $(".swal").data("swal");
if (swal) {
  Swal.fire({
    title: "Success!",
    text: swal,
    icon: "success",
  });
} else {
  const swal_fail = $(".swal-fail").data("swal");
  if (swal_fail) {
    Swal.fire({
      title: "Failed!",
      text: swal_fail,
      icon: "error",
    });
  }
}

// tombol hapus
$(".tombol-hapus").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");
  Swal.fire({
    title: "Apakah anda yakin ingin menghapus data ini?",
    text: "Data yang sudah dihapus tidak dapat dikembalikan.",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });
});
