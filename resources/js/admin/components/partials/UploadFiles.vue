<template>
  <div class="file-uploader">
    <div :id="'fileUploader' + nbr" class="dropzone text-center">
      <div :id="'addBtn' + nbr" class="mb-1">
        <span>{{ trans("admin.add-file") }}</span>
      </div>
      <div :id="'filePreview' + nbr" class="d-none">
        <div class="dz-preview dz-file-preview mb-1">
          <div class="dz-details">
            <div class="dz-filename">
              <span data-dz-name></span>
            </div>
          </div>
          <div class="dz-error-message">
            <span data-dz-errormessage></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Dropzone from "dropzone";
export default {
  props: ["files", "type", "nbr"],
  mounted() {
    var self = this;
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("#fileUploader" + this.nbr, {
      url:
        self.prefix +
        "ajax/file/upload?type=" +
        self.type +
        "&_token=" +
        App.csrfToken,
      thumbnailWidth: 150,
      maxFilesize: 50,
      uploadMultiple: false,
      clickable: "#addBtn" + this.nbr,
      previewTemplate: document.querySelector("#filePreview" + this.nbr)
        .innerHTML,
      multiple: false,
      addRemoveLinks: true,
      maxFiles: 100,
      dictDefaultMessage: false,
      dictFallbackMessage: self.trans("text.dict-fallback-message"),
      dictFallbackText: self.trans("text.dict-fallback-text"),
      dictFileTooBig: self.trans("text.dict-file-too-big"),
      dictInvalidFileType: self.trans("text.dict-invalid-file-type"),
      dictResponseError: self.trans("text.dict-response-error"),
      dictCancelUpload: '<i class="fas fa-trash"></i>',
      dictUploadCanceled: self.trans("text.dict-upload-canceled"),
      dictCancelUploadConfirmation: self.trans(
        "text.dict-cancel-upload-confirmation"
      ),
      dictRemoveFile: '<i class="fas fa-trash"></i>',
      dictMaxFilesExceeded: self.trans("text.dict-max-files-exceeded"),
      //acceptedFiles: 'doc,docx,PDF',
      headers: {
        "My-Awesome-Header": "header value",
      },
      init: function () {
        this.on("success", function (file, response) {
          self.$emit("uploaded", {
            key: file.upload.uuid,
            val: response.file.file_id,
          });
          if (this.getAcceptedFiles().length > 100) {
            this.disable();
            $("#addBtn" + this.nbr).hide();
          } else {
            this.enable();
            $("#addBtn" + this.nbr).show();
          }
        });

        this.on("removedfile", function (file) {
          if (file.upload == undefined) {
            self.$emit("removed", file.file_id);
          } else {
            self.$emit("removed", file.upload.uuid);
          }
          if (this.getAcceptedFiles().length > 100) {
            this.disable();
            $("#addBtn" + this.nbr).hide();
          } else {
            this.enable();
            $("#addBtn" + this.nbr).show();
          }
        });
        if (self.files) {
          var i;
          for (i = 0; i < self.files.length; i++) {
            var mockFile = {
              name: self.files[i].file_path.substring(
                self.files[i].file_path.lastIndexOf("/") + 1
              ),
              file_id: self.files[i].file_id,
              size: 12345,
            };
            this.emit("addedfile", mockFile);
            this.emit("complete", mockFile);
            self.$emit("uploaded", {
              key: self.files[i].file_id,
              val: self.files[i].file_id,
            });
          }
        }
      },
    });
  },
};
</script>
