// npm package: dropify
// github link: https://github.com/dropzone/dropzone
Dropzone.autoDiscover = false;
$(function () {
    "use strict";

    $("#my-dropzone").dropzone({
        url: "/<controller>/action/",
        autoProcessQueue: false,
        uploadMultiple: true, //if you want more than a file to be   uploaded
        addRemoveLinks: true,
        maxFiles: 10,
        previewsContainer: "#previewDiv",
    });
});
