$(function() {
  
    $("#next").click(
      () =>
      {
        $('#specialistValidation li:nth-child(2) a').tab('show');
      }
    )
  
    $("#back").click(
      () =>
      {
        $('#specialistValidation li:nth-child(1) a').tab('show');
      }
    )
  
  });