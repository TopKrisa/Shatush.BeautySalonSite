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

    .modal_contens_actions {

        border-radius: 5px;
        position: fixed;
        top: 50%;
        background: var(--color-background);
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 280px;
        padding: 10px;
        z-index: 9999999999;
    }

    .modal_contens_actions form input {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_contens_actions form select {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_contens_actions form button {
        font-weight: 500;
        color: var(--color-primary);
        font-size: 18px;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-top: 10px;
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

    .example-2 .btn-tertiary {
        color: #555;
        padding: 0;
        font-size: 16px;
        line-height: 40px;
        margin: 0;
        display: block;
        border: 3px solid var(--brd-clr)
    }

    .example-2 .btn-tertiary:hover,
    .example-2 .btn-tertiary:focus {
        color: #ff006c;
        ;
        border-color: #ff006c;
    }

    .example-2 .input-file {
        width: .1px;
        height: .1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1
    }

    .example-2 .input-file+.js-labelFile {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        padding: 0 10px;
        cursor: pointer
    }

    .example-2 .input-file+.js-labelFile .icon:before {
        content: "\f093"
    }

    .example-2 .input-file+.js-labelFile.has-file .icon:before {
        content: "\f00c";
        color: #5AAC7B
    }
</style>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
<link href="/assets/css/admin.css" rel="stylesheet">
<div class="modal" id="ActionsModal">
    <div class="modal_contens_actions">
        <form action="/actions/add" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Введите название акции" name="name" id="name">
            <h3>Выберите дату окончания</h3>
            <input type="date" placeholder="Выберите дату окончания" name="edition_date">
            <div class="input-field" style="justify-content:center">
                <div class="example-2">
                    <div class="form-group">
                        <input type="file" name="file" id="file" class="input-file" accept=".jpg,.jpeg,.png">
                        <label for="file" class="btn btn-tertiary js-labelFile" style="align-items:center">

                            <span class="js-fileName" style="justify-content:center">Загрузить фото</span>
                        </label>
                    </div>
                </div>
            </div>
            <a class="btnss">
                <button type="submit">Сохранить</button>
            </a>
        </form>
    </div>
</div>
<script lang="js">
    (function() {

        'use strict';

        $('.input-file').each(function() {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();

            $input.on('change', function(element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label.removeClass('has-file').html(labelVal);
            });
        });

    })();
</script>