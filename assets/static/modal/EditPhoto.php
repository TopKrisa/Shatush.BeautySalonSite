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

    .modal_contens_photo_edit {

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

    .modal_contens_photo_edit form input {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_contens_photo_edit form select {
        font-size: 18px;
        font-weight: 500;
        width: 100%;
        border: 3px solid var(--brd-clr);
        margin-bottom: 10px;
        padding: 10px;
        background: var(--color-background);
        color: var(--color-primary);
    }

    .modal_contens_photo_edit form button {
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
<div class="modal" id="EditPhotoPopup">
    <div class="modal_contens_photo_edit">
        <form action="/photo/edit" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" accept=".jpg,.jpeg,.png" style="content: '';">
            <input type="text" name="oldpath" id="oldpath" style="display: none;">
            <input type="text" name="Idphoto" id="Idphoto" style="display: none;">

            <a class="btnss">
                <button type="submit">Сохранить</button>
            </a>
        </form>
    </div>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>