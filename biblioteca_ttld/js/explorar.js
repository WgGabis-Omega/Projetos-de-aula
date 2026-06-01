//Sistema de pesquisa

const searchInput = document.querySelector('#search');

searchInput.addEventListener('input', () => {

    const cards = document.querySelectorAll('.story-card');

    cards.forEach(card => {

        const title = card
        .querySelector('h3')
        .innerText
        .toLowerCase();

        const search = searchInput
        .value 
        .toLowerCase();

        card.style.display = title.includes(search)
        ? 'block' 
        : 'none';
    })
    
})