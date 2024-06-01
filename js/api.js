async function getAnimes() {
  try {
    const res = await fetch("https://api.jikan.moe/v4/anime");
    const data = await res.json();
    console.log(data.data);
  } catch (error) {
    console.error(error);
  }
}

getAnimes();
