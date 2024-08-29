
document.addEventListener('DOMContentLoaded', function() {
    const cards = [
        { title: 'Card 1', image: '../Images/card1.jpg' },
        { title: 'Card 2', image: '../Images/card2.jpg' },
        { title: 'Card 3', image: '../Images/card3.jpg' }
    ];

    const container = document.querySelector('.cards-container');

    cards.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.classList.add('card');
        cardElement.innerHTML = `<img src="${card.image}" alt="${card.title}"><h2>${card.title}</h2>`;
        container.appendChild(cardElement);
    });
});
