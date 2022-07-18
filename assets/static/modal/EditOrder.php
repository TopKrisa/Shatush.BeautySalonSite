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

    .modal_content_edit_orders {

        border-radius: 5px;
        position: fixed;
        top: 50%;
        background: var(--color-background);
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 250px;
        padding: 10px;
        z-index: 9999999999;
    }

    .modal_content_edit_orders form input {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_content_edit_orders form select {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_content_edit_orders form button {
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
<!-- <link href="/assets/css/admin.css" rel="stylesheet"> -->
<div class="modal" id="EditOrder">
    <div class="modal_content_edit_orders">
        <form action="/profile/order/update" method="POST">
            <select name="type">
                <option value="0">Выберите услугу</option>
                <?php
                $categories =  \R::getAll("SELECT c.id, c.name, u.name as 'worker' FROM `categories` c, users u where c.worker = u.id;");
                foreach ($categories as $category) {
                    echo '<option value="' . $category["id"] . '">' . $category["name"] . ' - ' . $category["worker"] . '</option>';
                }
                ?>
            </select>
            <input type="date" placeholder="Выберите дату" name="creation_date">
            <input type="time" placeholder="Выберите время" name="time">
            <input name="id" id="Orderid" style="display: none; color:rgba(0, 0, 0, 0);">
            <a class="btnss">
                <button type="submit">Сохранить</button>
            </a>
        </form>
    </div>
</div>