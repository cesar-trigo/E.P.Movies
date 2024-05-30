const $login = document.getElementById("login");

//envio de formulario
$login.addEventListener("submit", event => {
  event.preventDefault();
  const formData = new FormData($login);
  const data = Object.fromEntries(formData);
  inputValidation(data);
});

//validacion de campos
const inputValidation = dt => {
  const emptyFields = Object.entries(dt)
    .filter(([key, value]) => value === "")
    .map(([key]) => key);

  if (emptyFields.length > 0) {
    alert(emptyFields);
  }
};

//alerta
const alert = key => {
  const keys = key.join(" - ");
  const text = key.length === 1 ? "is empty" : "they are empty";
  Swal.fire({
    text: `${keys}, ${text}`,
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
};
