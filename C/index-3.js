function api(name) {
    const API_URL = 'https://geo.api.gouv.fr/communes?nom='.concat(name);
    fetch(API_URL)
        .then((response) => response.json())
        .then((json) => {
            console.log(json[0].codesPostaux[0])
        });
}
api("bordeaux");
