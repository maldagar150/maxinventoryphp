<div class="text-right pt-4 pb-4">
    <a href="#" class="btn btn-link btn-back"><- Regresar atrás</a>
</div>

<script type="text/javascript">
    let btn_back = document.querySelector(".btn-back");

    btn_back.addEventListener('click', function(e){
        e.preventDefault();
        window.history.back();
    });
</script>