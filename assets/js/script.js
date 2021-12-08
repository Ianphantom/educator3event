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
      icon: "warning",
    });
  }
}
