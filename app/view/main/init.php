<h1 class="title">Тестовое задание</h1>
<div class="content">
    <div class="form">
        <h2 class="content_title">Форма добавления отзыва</h2>
        <form id="send" action="" method="post">
            <div class="form_block block">
                <h6 class="block_title">Имя</h6>
                <input id="name" required name="name" placeholder="Имя" type="text" class="block_input">
            </div>
            <div class="form_block block">
                <h6 class="block_title">Отзыв</h6>
                <textarea id="message" required name="message" placeholder="Отзыв" class="block_input"></textarea>
            </div>
            <div class="form_block block">
                <button class="block_button" type="submit" id="js-ajax-send">Отправить</button>
            </div>
        </form>
    </div>
    <div class="reviews" <?= count($reviews) ? '' : 'style="display: none"' ?>>
        <h2 class="content_title">Отзывы</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($reviews as $review) { ?>
                <tr>
                    <td><?= $review['name'] ?></td>
                    <td><?= $review['message'] ?></td>
                    <td><?= $review['date'] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
