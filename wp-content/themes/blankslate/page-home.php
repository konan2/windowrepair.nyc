<?php /* Template Name: Home page */ ?>


<?php get_header(); ?>




<form id="monday-form">
    <input type="text" id="name" placeholder="Your Name" required>
    <input type="email" id="email" placeholder="Your Email" required>
    <textarea id="message" placeholder="Your Message"></textarea>
    <button type="submit">Submit</button>
</form>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('monday-form').addEventListener('submit', function(event) {
        event.preventDefault();

        // Получаем данные из формы
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Ваш API-ключ и ID доски в Monday.com
        const API_KEY = 'eyJhbGciOiJIUzI1NiJ9.eyJ0aWQiOjM1MjQxMjkxMywiYWFpIjoxMSwidWlkIjo1ODA1MzIzOSwiaWFkIjoiMjAyNC0wNC0yNlQwNjo1ODozOS4zMjZaIiwicGVyIjoibWU6d3JpdGUiLCJhY3RpZCI6NjE2NjcwOSwicmduIjoidXNlMSJ9.szfHVjo2r8QOTzy9ulsOF2xA2ODrEyAZBAvWmpCQ3mI';
        const BOARD_ID = '2614272835';

        // Создаем объект данных для отправки
        const data = {
            "item_name": name,
            "column_values": {
                "email": email,
                "message": message
            },
            "board_id": BOARD_ID
        };

        // Отправляем данные на сервер Monday.com
        axios.post('https://api.monday.com/v2/items', data, {
            headers: {
                'Authorization': API_KEY,
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            console.log('Data successfully sent to Monday.com:', response.data);
            // Добавьте здесь дополнительную обработку ответа, если нужно
        })
        .catch(error => {
            console.error('Error sending data to Monday.com:', error);
            // Добавьте здесь обработку ошибок
        });
    });
</script>

<?php the_content(); ?>
<?php get_footer();?>