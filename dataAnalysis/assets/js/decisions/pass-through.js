$(function() {
  
    $("#next").click(
      () =>
      {
        $('#passThrough li:nth-child(2) a').tab('show');
      }
    )
  
    $("#back").click(
      () =>
      {
        $('#passThrough li:nth-child(1) a').tab('show');
      }
    )
  
  });