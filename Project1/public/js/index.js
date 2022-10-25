const preview=document.getElementById('preview');
        preview.addEventListener('click',function(){
            document.getElementById('file').click();
        });

const input = document.getElementById('file');
input.addEventListener("change", previewPhoto);

      function previewPhoto(){
        const file = input.files;
    if (file) {
        const fileReader = new FileReader();
        const preview = document.getElementById('preview');
        fileReader.onload = function (event) {
        preview.setAttribute('src', event.target.result);
        }
        fileReader.readAsDataURL(file[0]);
        console.log(fileReader);
        }
      }