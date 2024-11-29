<?php include 'header.html'; ?>

<main>
    <h1>Спасибо за ваше обращение!</h1>

    <div class="container">
        <?php
        // Проверка с помощью какого метода отправлен форма
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $category = $_POST['category'] === 'proposal' ? 'Предложение' : 'Жалоба';
            $source = isset($_POST['source']) ? ($_POST['source']) : 'Не указано';
            $agreement = isset($_POST['agreement']) ? 'Согласие дано' : 'Согласие не дано';

            echo "<p><strong>ФИО:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Категория обращения:</strong> $category</p>";
            echo "<p><strong>Источник информации:</strong> $source</p>";
            echo "<p><strong>Сообщение:</strong> $message</p>";
            echo "<p><strong>Согласие на обработку данных:</strong> $agreement</p>";

            if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
                $fileName = $_FILES['attachment']['name'];
                echo "<p><strong>Прикреплённый файл:</strong> $fileName</p>";
            } else {
                echo "<p><strong>Файл не был прикреплён.</strong></p>";
            }

            echo '
        <form action="form.php" method="POST">
            <input type="hidden" name="name" value="' . $name . '">
            <input type="hidden" name="email" value="' . $email . '">
            <input type="hidden" name="message" value="' . $message . '">
            <input type="hidden" name="source" value="' . $source . '">
            <input type="hidden" name="category" value="' . $category . '">
            <input type="submit" class="button_home" value="Заполнить снова">
        </form>
    ';
        } else {
            echo "Данные не были отправлены.";
        }
        ?>
    </div>

</main>
</body>

</html>