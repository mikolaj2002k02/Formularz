
$(document).on('click','#btm',function()
{
  let data = $(this) .Attr('data-id');
  $.ajax({url:'test.php'})
  type: 'GET';
  datatype:'JSON';
  data:{data:'id'};
  success: function(dane);{
  $('#btm').val(dane);
  }
})