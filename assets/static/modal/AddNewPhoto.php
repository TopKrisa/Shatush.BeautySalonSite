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

    .modal_contents_photo {

        border-radius: 5px;
        position: fixed;
        top: 50%;
        background: var(--color-background);
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        height: 150px;
        padding: 10px;
        z-index: 9999999999;
    }

    .modal_contents_photo form input {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_contents_photo form select {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_contents_photo form button {
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
        transition: all 300ms ease;
        cursor: pointer;
    }

    .btnss:hover {
        background: var(--color-primary);
        color: var(--color-background);

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
<div class="modal" id="AddPhotoPopup">
    <div class="modal_contents_photo">
        <form action="/photo/add" method="POST" enctype="multipart/form-data">
            <input type="file" cla name="file" accept=".jpg,.jpeg,.png" style="content: '';">
            <!-- <div class="input-field" style="justify-content:center">
                <div class="example-2">
                    <div class="form-group">
                        <input type="file" name="ss" id="file" class="input-file" accept=".jpg,.jpeg,.png">
                        <label for="file" class="btn btn-tertiary js-labelFile" style="align-items:center">
                            <span class="js-fileName" style="justify-content:center">Загрузить фото</span>
                        </label>
                    </div>
                </div>
            </div> -->
            <a class="btnss">
                <button type="submit">Сохранить</button>
            </a>
        </form>
    </div>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>