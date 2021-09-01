Vue.component('modal', {

    template: `
    <div class='modal is-active'>
    <div class="modal-background"></div>

    <div class='modal-card'>
        <header class="modal-card-head">
           <p class='modal-card-title'>Modal titles</p>
           <button class='delete'></button>
    </header>

    <section class="modal-card-body">

        Temporary Content for Now

    </section>

    <footer class='modal-card-foot'>
        <a class="button is-primary" >Save Changes</a>
        <a class="button" >Cancel</a>

    </footer>
    
</div>
</div>
    `
})

new Vue({
    el: '#root',


    data: {
        couponApplied: false
    },


    created() {
        Event.listen('applied', () => alert('Handling it'))
    }


});