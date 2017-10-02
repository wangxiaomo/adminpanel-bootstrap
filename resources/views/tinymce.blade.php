<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TinyMCE</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
  <form method="POST">
    {{ csrf_field() }}
    Edit Below
    <textarea name="content">点击进入编辑模式</textarea>
    <button id="submit">提交</button>
  </form>
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="/bower_components/tinymce/tinymce.hack.min.js"></script>
  <script src="/js/tinymce.zh_CN.js"></script>
  <script>
$(function(){
  tinymce.init({
    selector: 'textarea',
    convert_urls: false,
    images_upload_base_path: '/',
    images_upload_url: '/api/tinymce/upload',
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor textcolor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code autosave'
    ],
    toolbar: 'insert | undo redo |  styleselect | bold italic backcolor fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code fullscreen',
  })

  $('#submit').on('click', function(e){
    e.stopPropagation();
    tinymce.activeEditor.uploadImages(function(){
      $('form').submit();
    });
  })
})
  </script>
</body>
</html>
