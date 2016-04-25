<!DOCTYPE HTML>
<html lang="ru">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
<form role="form" action="/wohoo" method="POST">
  <label>Stuff</label>
    <div class="multi-field-wrapper">
      <div class="multi-fields">
        <div class="multi-field">
          <input type="text" name="stuff[]">
          <button type="button" class="remove-field">Remove</button>
            <button type="button" class="add-field">Add field</button>
        </div>
      </div>
  </div>
</form>
</body>
<script>
$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
</script>

