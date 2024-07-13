<?php include 'templates/header.php'; ?>

<div class="wrapper">

    <div class="wrap" id="q">

        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"><span id="number"> </span>1 of 3 </div>
        </div>
        <div class="h4 font-weight-bold"><?=$pregunta->tema;?></div>
        <div class="h4 font-weight-bold"><?=$pregunta->pregunta;?></div>
        <div class="pt-4">
            <form>
                <input type="hidden" name="" value="<?=$pregunta->id;?>">
                <?php if ($pregunta->tipo == 'C'): ?>
                    <label class="options">Si<input type="radio" name="radio"><span class="checkmark"></span></label>
                    <label class="options">No<input type="radio" name="radio"><span class="checkmark"></span></label>
                    <label class="options">Nose<input type="radio" name="radio" id="rd" ><span class="checkmark"></span></label>
                    <label class="options">No aplica<input type="radio" name="radio"> <span class="checkmark"></span></label>
                <?php else: ?>
                    <input type="text" class="input" name="rta-<?=$pregunta->id;?>" value="">
                <?php endif ?>
            </form>
        </div>
        <div class="d-flex justify-content-end pt-2">
            <button class="btn btn-primary mx-3" id="back"><span class="fas fa-arrow-left pr-1"></span>Anterior</button>
            <button class="btn btn-primary" id="next">Siguiente <span class="fas fa-arrow-right"></span></button>
        </div>
    </div>

</div>


<script>
var next = document.getElementById('next')
var back = document.getElementById('back')

document.addEventListener('DOMContentLoaded', function () {

    next.onclick = function () {
        alert("next");
    }

    back.onclick = function () {
        alert("back");
    }

});

/*
function uncheck() {
var rad = document.getElementById('rd')
rad.removeAttribute('checked')
}
document.addEventListener('DOMContentLoaded', function () {
const main = document.querySelector('body')
const toggleSwitch = document.querySelector('.slider')

toggleSwitch.addEventListener('click', () => {
main.classList.toggle('dark-theme')
})
})
*/
</script>

<?php include 'templates/footer.php'; ?>