(function() {
    'use strict'
    
    window.addEventListener('load', function() {
        // Fetch all inputs to apply Inputmask
        if (document.querySelectorAll("input[type=tel]").length > 0) Inputmask().mask(document.querySelectorAll("input"))
        // Question click event
        var elements = document.getElementsByClassName('q-element'),
            question = document.getElementById('question'),
            last = document.getElementById('last-page'),
            next = document.getElementById('next-page')

        Array.prototype.filter.call(elements, function(element) {
            element.addEventListener('click', function(event) {
                event.preventDefault()

                var formData = new FormData()
                    formData.append('question', question.value)
                    formData.append('answer', this.id)
                var token = document.querySelector('meta[name="csrf-token"]').content,
                    xhr = new XMLHttpRequest()
                    xhr.open("POST", '/question', true)
                    xhr.setRequestHeader('X-CSRF-TOKEN', token)
                    xhr.send(formData)

                    xhr.onloadend = function() {
                        if (this.status != 200) {
                            alert( xhr.status + ': ' + xhr.statusText )
                        }
                        else {
                            var response = JSON.parse(this.responseText)
                            if (response.success) {
                                if (parseInt(next.value) > parseInt(last.value)) {
                                    location.href = '/success'
                                }
                                else {
                                    location.href = '/question?page=' + next.value
                                }
                            }
                        }
                    }
            }, false)
        })
    }, false)
})()