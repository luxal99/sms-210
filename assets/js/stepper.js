var stepper1Node = document.querySelector('#stepper1')
var stepper1 = new Stepper(document.querySelector('#stepper1'))

stepper1Node.addEventListener('show.bs-stepper', function(event) {
    console.warn('show.bs-stepper', event)
})
stepper1Node.addEventListener('shown.bs-stepper', function(event) {
    console.warn('shown.bs-stepper', event)
})