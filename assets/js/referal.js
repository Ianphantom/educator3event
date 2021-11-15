function myFunction() {
    var copyText = document.getElementById("koderef");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);
  }