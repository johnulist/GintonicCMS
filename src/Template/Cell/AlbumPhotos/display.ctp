<?php
$this->Helpers()->load('GintonicCMS.Require');
echo $this->Require->req('files/filepicker');
echo $this->Require->req('AlbumPhotos/image_galary');
?>
<?php if ($userId == $loggedInUserId): ?>
    <div class="row">
        <div class="col-md-12">
            <input id="user-id" type="hidden" value="<?php echo $userId ?>" />
            <input id="logged-in-user-id" type="hidden" value="<?php echo $loggedInUserId ?>" />
            <div id="contact-alert"></div>

            <div id = "upload-alert"></div>
            <div id="modal-loader"></div>
            <button type="button" class="btn btn-primary upload pull-right" data-loading-text="Loading..." data-upload-callback="AlbumPhotos/upload_photos">Upload Image</button>
        </div>
    </div>

<?php endif; ?>
<div class="row" data-photogalary>
    <?php echo $this->element('GintonicCMS.AlbumPhotos/photo_galary', ['album' => $album, 'userId' => $userId, 'loggedInUserId' => $loggedInUserId]); ?>
</div>