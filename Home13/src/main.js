let ready
ready = $(document).ready(function () {
  let edit = 0
  let selector
  selector = function (event) {
    event.preventDefault()

    let inputInfo = $('#inputId').val()

    let listitem = $('<li><span id="' + edit + '">' + inputInfo + '</span><input class="field view" type="text" value="' + inputInfo + '"><button class="deleteButton">remove</button>' + '<button class="editButton">edit</button>' + '</li>')
    edit = edit + 1
    $('ol').append(listitem)
    $('#inputId')[0].value = ' '
    $(listitem).children('input')
    $('input').keydown(function (e) {
      if (e.which == 13) {
      }
    })

    $('.editButton').off('click')

    $('.editButton').on('click', function () {
      $(this).parent().children('input').toggleClass('view')
      inputInfo = $(this).parent().children('input').val()
      $(this).parent().children('span').text(inputInfo)
      $(this).parent().children('span').toggleClass('view')
    })

    $('.deleteButton').on('click', function () {
      $(this).parent().remove()
    })
  }
  $('#form').on('submit', selector)

  $(document).on('click', 'li', function () {
    $(this).toggleClass('strike')
  })
  $('#Erase').on('click', function () {
    $('.strike').remove()
  })
  $('#Clear').on('click', function () {
    $('li').remove()
  })
})

