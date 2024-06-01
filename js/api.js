const url = "https://free-to-play-games-database.p.rapidapi.com/api/games";
const options = {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "89a67f3009msh79f83856e91b723p1e89dbjsn22632ff05b30",
    "X-RapidAPI-Host": "free-to-play-games-database.p.rapidapi.com",
  },
};
async function getGames() {
  try {
    const res = await fetch(url, options);
    const data = await res.json();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
}

getGames();

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
