<style>
  .modal {
    background-color: rgba(0, 0, 0, 0.3);
    position: fixed;
    top: 0;
    left: 0;
    display: none;
    width: 100%;
    height: 100%;
    z-index: 999999;
    transition: all 0.8s ease 0s;
  }

  .modal_content {

    border-radius: 5px;
    position: fixed;
    top: 50%;
    background: var(--color-background);
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    height: 200px;
    padding: 10px;
    z-index: 9999999999;
  }

  .modal_content form input {
    font-size: 18px;
    font-weight: 500;
    width: 100%;
    border: 3px solid var(--brd-clr);
    margin-bottom: 10px;
    padding: 10px;
    background: var(--color-background);
    color: var(--color-primary);
  }

  .modal_content form select {
    font-size: 18px;
    font-weight: 500;
    width: 100%;
    border: 3px solid var(--brd-clr);
    margin-bottom: 10px;
    padding: 10px;
    background: var(--color-background);
    color: var(--color-primary);
  }

  .modal_content form button {
    font-weight: 500;
    color: var(--color-primary);
    font-size: 18px;
    width: 100%;
    border: 3px solid var(--brd-clr);
    margin-bottom: 10px;
    padding: 10px;
    background: var(--color-background);
    border-radius: 5px;
    cursor: pointer;
  }

  .btnss :hover {
    background: var(--color-primary);
    color: var(--color-background);
    border: 3px solid var(--color-primary);
  }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

<div class="modal" id="mymodal">
  <div class="modal_content">
    <form action="/admin/categories" method="POST">
      <input type="text" placeholder="Введите название" name="name" id="name">
      <select name="worker">
        <option value="0">Выберите специалиста</option>
        <?php
        $categories =  \R::getAll("SELECT * FROM `users` WHERE `group` = 2 ORDER by `id`;");
        foreach ($categories as $category) {
          echo '<option value="' . $category["id"] . '">' . $category["name"] . '</option>';
        }
        ?>
      </select>





      <a class="btnss">

        <button type="submit">Сохранить</button>
      </a>
    </form>
  </div>
</div>