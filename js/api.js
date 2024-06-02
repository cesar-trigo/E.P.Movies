const $contentCardApi = document.getElementById("contentCardApi");
const $loading = document.getElementById("loading");

async function getAnimes() {
  try {
    const res = await fetch("https://api.jikan.moe/v4/anime");
    const data = await res.json();
    imprCards(data.data, $contentCardApi);
    console.log(data.data);
  } catch (error) {
    console.error(error);
  } finally {
    $loading.style.display = "none";
  }
}

getAnimes();

const createCards = data => {
  const card = document.createElement("div");
  card.innerHTML = `
  <img class="img-card-api" src=${data.images.webp.image_url} alt=${data.title} loading="lazy">
  <div>
    <p>Finalizado</p>
    <p>${data.type}</p>
    <p>${data.title}</p>
  </div>
  `;
  return card;
};

const imprCards = (data, cont) => {
  cont.innerHTML = ``;
  if (data.length > 0) {
    let fragment = document.createDocumentFragment();
    data.forEach(e => fragment.appendChild(createCards(e, cont)));
    cont.appendChild(fragment);
  }
};
