<?php /* Template Name: Home page */ ?>

<?php get_header(); ?>



<div class="modal fade" id="book-online" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal__content">




  
  <form id="monday-form" class="form-wrap form-wrap__rows">
  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z" fill="currentColor"/>
                </svg>
    </button>
  <h3 class="form-wrap__title poppins-bold">BOOK ONLINE</h3>
      <div class="row"> 
        <div class="form-group">
            <label for="name_field">Name<span></label>
            <input class="form-control" type="text" id="name_field" placeholder="Your name" required>
          </div>
      </div>
      <div class="row"> 
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" id="email" placeholder="yourmail@example.com" required>
          </div>
      </div>
      <div class="row"> 
          <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="tel" id="phone" placeholder="+1(___)-___-__-__" required>
          </div>
      </div>
      <div class="row"> 
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" type="text" id="address" placeholder="Your address">
        </div>   
      </div>
      <div class="row"> 
        <div class="form-group">
            <label for="description">Project Description</label>
            <textarea class="form-control" id="description" placeholder="Description" required></textarea>
        </div>
      </div>
      <div class="row"> 
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LdnrcopAAAAAHVYtPWkOz4oIjudEjfZeQFqTh8v"></div>
        </div>
      </div>
      <div class="row"> 
        <div class="form-group">
            <button id="form-submit-button" type="submit" class="btn btn-secondary btn-medium w-100">Send Request</button>
        </div>
      </div>
  </form>



      </div>
  </div>
</div>




<script>



document.getElementById('monday-form').addEventListener('submit', function(event) {
    event.preventDefault();

 
const trackingId = 'G-MSLQV6CC5K';  

const form = document.getElementById('monday-form');    
const name = document.getElementById('name_field').value; 
const email = document.getElementById('email').value; 
const phone = document.getElementById('phone').value; 
const address = document.getElementById('address').value; 
const projectDescription = document.getElementById('description').value; 
const button = document.getElementById('form-submit-button'); 

button.textContent  = 'Please wait...';

const columnValues = {
    "email": { "text": email,  "email": email },
    "text": phone, 
    "text5": address,
    "long_text": projectDescription
};

const data = {
    'query': `mutation {
        create_item (
            board_id: 2614272835,
            item_name: "${name}",
            column_values: "${JSON.stringify(columnValues).replace(/"/g, '\\"')}"
        ) {
            id
            name
        }
    }`
};



// Отправка данных



// Отправляем данные на сервер Monday.com
fetch("https://api.monday.com/v2", {
    method: 'post',
    headers: {
        'Content-Type': 'application/json',
        'Authorization': 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjM1MjQxMjkxMywiYWFpIjoxMSwidWlkIjo1ODA1MzIzOSwiaWFkIjoiMjAyNC0wNC0yNlQwNjo1ODozOS4zMjZaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6NjE2NjcwOSwicmduIjoidXNlMSJ9.szfHVjo2r8QOTzy9ulsOF2xA2ODrEyAZBAvWmpCQ3mI',
        'API-Version': '2023-04'
    },
    body: JSON.stringify(data)
}).then(response => {
    if (!response.ok) {
        throw new Error('Network response was not ok');
        button.value = 'Please try again.';
    }
    if (response.ok) {
        form.innerHTML = `<div id="success"><h2>Thank You.</h2><p>We will contact you. Shortly.</p></div>`;
    }
    return response.json();
}).then(data => {
    console.log(data);
}).catch(error => {
    console.error('There was a problem with the fetch operation:', error);
});







function sendConversionData(trackingId, email, phone, address, description) {
    // URL для отправки данных о событии конверсии
    var url = 'https://www.google-analytics.com/collect';

    // Данные для отправки
    var data = {
        v: '1',                    // Версия протокола
        tid: trackingId,           // Идентификатор отслеживания (Tracking ID)
        cid: Math.floor(Math.random() * 10000000000), // Идентификатор клиента (Client ID)
        t: 'event',                // Тип запроса
        ec: 'conversion',          // Категория события
        ea: 'submit',              // Действие события
        el: 'form',                // Метка события
        ev: 1,                     // Значение события
        name: name,              // name
        email: email,              // Email
        phone: phone,              // Телефон
        address: address,          // Адрес
        description: projectDescription   // Описание проекта
    };

    // Форматирование данных для отправки
    var params = new URLSearchParams(data);

    // Опции запроса
    var options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: params
    };

    // Отправка данных на сервер Google Analytics
    fetch(url, options)
        .then(response => {
            // Обработка ответа (можно добавить дополнительную логику)
            console.log('Conversion data sent successfully');
        })
        .catch(error => {
            // Обработка ошибок (можно добавить дополнительную логику)
            console.error('Error sending conversion data:', error);
        });
}



sendConversionData(trackingId, name, email, phone, address, projectDescription);

});



</script>

<?php the_content(); ?>






<?php get_footer();?>