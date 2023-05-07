<b><label>Личная информация:</label></b><br>
Имя: <?php echo htmlspecialchars($_POST['name']); ?> <br>
Фамилия: <?php echo htmlspecialchars($_POST['surname']); ?> <br>
Отчество: <?php echo htmlspecialchars($_POST['otc']); ?> <br>
Пол: <?php echo ($_POST['pol']); ?> <br>
Цвет глаз: <?php $color = $_POST['eyes']; ?> <br>
Дата рождения: <?php echo htmlspecialchars($_POST['birth']); ?> <br>
Возраст: <?php echo htmlspecialchars($_POST['age']); ?> <br>
Фотография первой страница паспорта: <?php echo htmlspecialchars($_POST['passport']); ?><p>

<b><label>Контактная информация:</label></b><br>
Место рождения: <?php echo ($_POST['cities']); ?> <br>
Индекс: <?php echo htmlspecialchars($_POST['index']); ?> <br>
Домашний адрес: <?php echo htmlspecialchars($_POST['home-adress']); ?> <br>
Номер телефона: <?php echo htmlspecialchars($_POST['tel']); ?> <br> <p>

<b><label>Общая информация:</label></b><br>
Дата регистрации: <?php echo htmlspecialchars($_POST['data-reg']); ?> <br>

