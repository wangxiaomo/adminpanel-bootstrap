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
    images_upload_url: '/api/tinymce/upload',
    menubar: false,
    plugins: [
      'advlist autolink lists link image charmap print preview anchor textcolor',
      'searchreplace visualblocks code fullscreen',
      'insertdatetime media table contextmenu paste code'
    ],
    toolbar: 'insert | undo redo |  styleselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
    init_instance_callback: function(editor){
      editor.on('focus', function(e) {
        var text = editor.getContent();
        if(text == '<p>点击进入编辑模式</p>'){
          editor.setContent('');
        }
      });
      editor.on('blur', function(e) {
        var text = editor.getContent();
        if(!text){
          editor.setContent('点击进入编辑模式');
        }
      });
    }
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
