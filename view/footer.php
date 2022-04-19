</section>
<script type="text/javascript" src="assets/js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="assets/js/jquery.maskedinput-1.1.4.pack.js"></script>
<script src="assets/js/script.jS"></script>
<script>
let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e) => {
        let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
    });
}

let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
// console.log(sidebarBtn);
sidebarBtn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

let tamanhoTela = window.innerWidth;
if (tamanhoTela <= 800) {
    var sidebarResponsivo = document.querySelector(".sidebar"); // Procurando o elemento que você quer alterar
    sidebarResponsivo.classList.add("close");
} else {
    sidebarResponsivo.classList.remove("close");
}
</script>
<<<<<<< HEAD
=======




<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<script>
$(document).ready(function() {
    $('#tabela_javascript').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        },
    });
});
</script>
>>>>>>> 9437af97138c5ddeffcb82dd335b72cc10a52380
</body>

</html>