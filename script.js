function showTicket(ticketType) {
    const ticketTitle = document.querySelector('.ticket-tittle');
    const ticketDescription = document.querySelector('.ticket-description p');
    const ticketImage = document.querySelector('.ticket-image img');
    const buyButton = document.querySelector('.buy-button');

    let titleText = '';
    let descriptionText = '';
    let imageSrc = '';
    let buttonText = '';

    if (ticketType === 'silver') {
        titleText = 'SILVER TICKET';
        descriptionText = `<strong>Satisfying Viewing Experience with Silver Seats</strong><br>
            Enjoy a comfortable and affordable viewing experience with our Silver seats. 
            With strategic layout and ergonomic design, you'll enjoy every moment of the show perfectly. 
            Silver seats are the ideal choice for those seeking a balance of comfort and value. 
            Enjoy clear views, a pleasant atmosphere, and stay within your budget without compromising on entertainment quality.`;
        imageSrc = 'asset/silver.jpg';
        buttonText = 'BUY SILVER TICKET';
    } else if (ticketType === 'gold') {
        titleText = 'GOLD TICKET';
        descriptionText = `<strong>Enjoy Luxury with Gold Seats</strong><br>
                Experience unforgettable viewing with the best comfort and service. 
                Our Gold seats offer unobstructed views, more legroom for maximum comfort, and exclusive access to a private lounge where you can relax before the event begins. 
                Additionally, you'll receive personalized service from staff ready to cater to your every need, making your experience truly special and luxurious.`;
        imageSrc = 'asset/gold.jpg';
        buttonText = 'BUY GOLD TICKET';
    } else {
        titleText = 'BRONZE TICKET';
        descriptionText = `<strong>Affordable Entertainment with Bronze Seats</strong><br>
                Don’t miss the opportunity to enjoy your favorite events at a friendly price. 
                Our Bronze seats offer standard comfort to ensure you can still enjoy the show. 
                With easy access to the audience area and strategic location, Bronze seats are the perfect choice for those who want to enjoy 
                quality entertainment without breaking the bank. 
                Make a smart and affordable choice for a memorable experience.`;
        imageSrc = 'asset/bronze.jpg';
        buttonText = 'BUY BRONZE TICKET';
    }

    ticketTitle.innerHTML = `<span class="tittle-top">${titleText.split(' ')[0]}</span>
                             <span class="tittle-bottom">${titleText.split(' ')[1]}</span>`;

    ticketDescription.innerHTML = descriptionText;
    ticketImage.src = imageSrc;
    buyButton.innerHTML = buttonText;
}

document.querySelector('.ticket-button.active').click();
document.querySelectorAll('.ticket-button').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.ticket-button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        showTicket(button.getAttribute('onclick').match(/'(.*?)'/)[1]);
    });
});

function merch_openModal(item) {
    const titles = {
        hoodie: 'HOODIE',
        cap: 'CAP',
        crewneck: 'CREWNECK',
        bag: 'TOTE BAG'
    };

    const descriptions = {
        hoodie: 'Stay cozy and stylish with this chic hoodie, perfect for any Ariana fan. Its soft fabric and trendy design make it a must-have for casual wear and concert outings.',
        cap: 'Chic and comfy, this cap is perfect for any casual look. Its sleek design makes it a versatile addition to your wardrobe.',
        crewneck: 'Classic comfort with a modern twist. This crewneck is a staple for any wardrobe, offering both style and warmth.',
        bag: 'Stylish and essential, this tote bag is perfect for carrying your everyday items. Its fashionable design makes it a must-have accessory.'
    };

    const taglines = {
        hoodie: 'Cozy and Stylish',
        cap: 'Chic and Comfy',
        crewneck: 'Classic Comfort',
        bag: 'Stylish Essentials'
    };

    const images = {
        hoodie: './asset/hoodie.jpg',
        cap: './asset/cap.jpg',
        crewneck: './asset/crewneck.jpg',
        bag: './asset/bag.jpg'
    };

    document.getElementById('merch-modal').style.display = 'block';
    document.getElementById('merch-modal-title').innerText = titles[item];
    document.getElementById('merch-modal-description').innerText = descriptions[item];
    document.getElementById('merch-modal-image').src = images[item];
    document.getElementById('merch-modal-title-small').innerText = titles[item];
    document.getElementById('merch-modal-tagline').innerText = taglines[item];
}

function merch_closeModal() {
    document.getElementById('merch-modal').style.display = 'none';
}