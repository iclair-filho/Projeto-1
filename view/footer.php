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
</body>

</html>