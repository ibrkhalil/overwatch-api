$(function() {

  query('hero/1')

  $('.api-test').submit(function(e) {
    e.preventDefault()
    query($(this).find('.endpoint-input').val())
  })

  function query(endpoint) {

    var endpoint = '/api/v1/' + endpoint

    $.getJSON(endpoint, function(data) {
      renderResponse(endpoint, data)
    }).fail(function(jqxhr) {
      renderResponse(endpoint, JSON.parse(jqxhr.responseText))
    })
  }

  function renderResponse(endpoint, dataObj) {
    $('.api-test-response').html(JSON.stringify(dataObj, null, 2))
    $('.api-test-endpoint').html(endpoint)
  }
});
