.ticket-page{
    text-align: center;
    padding: 80px 0;
}
.concert-description h2{
    font-family: 'Bebas Neue', sans-serif;
    color: #0C1844;
    font-weight: 100;
    font-size: 96px;
    margin-bottom: 10px;
}

.ticket-selector {
    margin-bottom: 10px;
    position: relative;
    z-index: 3;
}

.ticket-button {
    background-color: #cd7f32;
    color: white;
    border: none;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    border-radius: 5px;
}
.ticket-button.active{
    background-color: #b76e28;
}

.ticket-details {
    display: flex;
    justify-content: center;
    margin-top: 40px;
}

.ticket-wrapper {
    position: relative;
    width: 100%;
    margin: 0 auto;
    padding-top: 100px;
}

.ticket-image {
    position: absolute;
    top: -25px;
    left: 20px;
    z-index: 1;
}

.ticket-image img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.ticket-content{
    position: relative;
    border: 2px solid #cd7f32;
    border-radius: 10px;
    padding: 0 40px;
    margin-top: 200px;
    background-color: white;
}

.ticket-tittle {
    position: absolute;
    top: -35px;
    left: 75%;
    transform: translateX(-50%);
    font-size: 2em;
    color: #0C1844;
    font-family: 'Playfair', sans-serif;
    font-weight: 100;
    width: auto;
    text-align: center;
    margin: 0 auto;
    padding: 0 20px;
}

.tittle-top{
    font-size: 128px;
    font-weight: 900;
    letter-spacing: 10px;
    text-align: center;
}
.tittle-bottom{
    font-size: 96px;
    border-bottom: 2px solid #cd7f32;
    padding-bottom: 10px;
    text-align: center;
}

.ticket-info {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 20px;
}


.ticket-description {
    flex: 1;
    max-width: 75%;
    text-align: left;
    margin-right: 40px;
}

.ticket-description h3,
.ticket-description p {
    font-size: 24px;
    color: #0C1844;
    margin: 55px 0 10px;
}

.ticket-info-location {
    flex: 1;
    max-width: 40%;
    text-align: left;
}

.ticket-info-location h3 {
    margin: 0;
    padding-bottom: 5px;
    font-family: 'Poppins', sans-serif;
    font-weight: 100;
    font-size: 32px;
}

.ticket-info-location h3 strong {
    font-weight: bold;
}

.ticket-info-more h3 {
    padding: 20px;
}

.buy-button {
    display: block;
    background-color: transparent;
    color: #cd7f32;
    padding: 10px 20px;
    border: 2px solid #cd7f32;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    margin-top: 60px;
    font-size: 18px;
    font-family: 'Poppins', sans-serif;
}

.buy-button:hover {
    background-color: #cd7f32;
    color: white;
}

.ticket-info-date {
    display: flex;
}