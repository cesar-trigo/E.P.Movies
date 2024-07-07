const $login = document.getElementById("login");
const $error = document.getElementById("error");

// Verificar si el elemento existe
if ($error) {
  if ($error.textContent.trim().length > 0) {
    //alerta
    /*     const keys = key.join(" - ");
    const text = key.length === 1 ? "is empty" : "they are empty"; */
    Swal.fire({
      html: `<span class='text-alert'>${$error.textContent}</span> `,
      position: "top-end",
      toast: true,
      timer: 4000,
      timerProgressBar: true,
      showConfirmButton: false,
      showCloseButton: true,
      showClass: {
        popup: "",
      },
      padding: ".5rem",
      customClass: {
        popup: "colored-toast",
      },
    });
  }
}
