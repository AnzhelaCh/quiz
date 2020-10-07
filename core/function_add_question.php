<script>
  $('#addDynamicExtraFieldButton').click(function(event) {
      addDynamicExtraField();
      return false;
  });

  function addDynamicExtraField() {
          var div = $('<div/>', {
              'class': 'DynamicExtraField'
          }).appendTo($('#DynamicExtraFieldsContainer'));
          var br = $('<br/>').appendTo(div);
          var label = $('<label/>').appendTo(div);
          var input = $('<input/>', {
              value: 'Видалити',
              type: 'button',
              'class': 'DeleteDynamicExtraField'
          }).appendTo(div);
          input.click(function() {
              $(this).parent().remove();
          });
          var br = $('<br/>').appendTo(div);
          var textarea = $('<textarea/>', {
              name: 'DynamicExtraField[]',
              'class': 'add_choise_select'
          }).appendTo(div);

          var select = $('<select/>',{
          name: 'correctAnswer[]',
          'class': 'add_true_select'
          }).prependTo(div);

          var option = $('<option/>',{
           value: "1"

             }).html("вірна відповідь").appendTo(select);

           var option = $('<option/>',{
           value: "0"

           }).html("не вірна відповідь").appendTo(select);
      }

  $('.DeleteDynamicExtraField').click(function(event) {
      $(this).parent().remove();
      return false;
  });
  </script>


