$(function() {
  
  $("#next").click(
    () =>
    {
      $('#specialistDecision li:nth-child(2) a').tab('show');
    }
  )

  $("#back").click(
    () =>
    {
      $('#specialistDecision li:nth-child(1) a').tab('show');
    }
  )

});