(function() {
    'use strict'
    
    window.addEventListener('load', function() {

        var scene = document.getElementById('scene');
        if (scene) var parallax = new Parallax(scene);
        $('.q-element').mouseenter(function() {
            var color = $('.q-box', this).data('hover')
            $('.q-box:not(.not-hover)', this).css('background-color', '#' + color)
        })
        .mouseleave(function() {
            $('.q-box:not(.not-hover)', this).css('background-color', '#FFFFFF')
        })

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
                if (!element.getElementsByClassName('q-box')[0].classList.contains('not-hover')) {
                    var answer = this.id,
                        formData = new FormData()
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
                                        var green = '#43cd66',
                                            red = '#E91818'
                                        if (answer == response.correct) {
                                            var boxes = document.getElementsByClassName('q-box')
                                            Array.prototype.filter.call(boxes, function(box) {
                                                box.classList.add('not-hover')
                                            })
                                            element.getElementsByClassName('q-box')[0].style.backgroundColor = green
                                        }
                                        else {
                                            var boxes = document.getElementsByClassName('q-box')
                                            Array.prototype.filter.call(boxes, function(box) {
                                                box.classList.add('not-hover')
                                            })
                                            element.getElementsByClassName('q-box')[0].style.backgroundColor = red
                                            var correct = document.getElementById(response.correct)
                                                correct.getElementsByClassName('q-box')[0].style.backgroundColor = green
                                        }
                                        
                                        setTimeout(() => location.href = '/success', 3000)
                                    }
                                    else {
                                        var green = '#43cd66',
                                            red = '#E91818'
                                        if (answer == response.correct) {
                                            var boxes = document.getElementsByClassName('q-box')
                                            Array.prototype.filter.call(boxes, function(box) {
                                                box.classList.add('not-hover')
                                            })
                                            element.getElementsByClassName('q-box')[0].style.backgroundColor = green
                                        }
                                        else {
                                            var boxes = document.getElementsByClassName('q-box')
                                            Array.prototype.filter.call(boxes, function(box) {
                                                box.classList.add('not-hover')
                                            })
                                            element.getElementsByClassName('q-box')[0].style.backgroundColor = red
                                            var correct = document.getElementById(response.correct)
                                                correct.getElementsByClassName('q-box')[0].style.backgroundColor = green
                                        }
                                        
                                        setTimeout(() => location.href = '/question?page=' + next.value, 3000)
                                    }
                                }
                            }
                        }
                }
            }, false)
        })

        var results = document.getElementsByClassName('result')
        
        Array.prototype.filter.call(results, function(result) {
            result.addEventListener('click', function(event) {
                event.preventDefault()

                var formData = new FormData()
                    formData.append('result', result.id)
                var token = document.querySelector('meta[name="csrf-token"]').content,
                    xhr = new XMLHttpRequest()
                    xhr.open("POST", '/success', true)
                    xhr.setRequestHeader('X-CSRF-TOKEN', token)
                    xhr.send(formData)

                    xhr.onloadend = function() {
                        if (this.status != 200) {
                            alert( xhr.status + ': ' + xhr.statusText )
                        }
                        else {
                            location.href = '/'
                        }
                    }
            })
        })
    }, false)
})()