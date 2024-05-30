const $form = document.getElementById("login"); // Asumiendo que el formulario tiene el id 'myForm'

const login = $form => {
  $form.addEventListener("submit", event => {
    event.preventDefault();
    const formData = new FormData($form);
    const data = Object.fromEntries(formData.entries());
    console.log(data);
    Swal.fire({
      title: "Custom width, padding, color, background.",
      position: "top-end",
      width: 600,
      padding: "0rem",
      color: "#716add",
      background: "#fff",
      backdrop: `
        rgba(0,0,123,0.4)
        url("/images/nyan-cat.gif")
        left top
        no-repeat
      `,
    });
  });
};

login($form);

function name(params) {}
