
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 A.V. Productions Co., Ltd. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>


    <!-- owl-carousel for recruitors -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <script type="text/javascript">
        $(document).ready(function() {
            let w = window.innerWidth;
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                items: 1,
                loop: true,
                autoplay: false
                    // dots: false
            });
        });
    </script>
    <script>
        const dropZone = document.querySelector(".drop_zone");
        const file_input = document.querySelector("#file_input");
        const browseBtn = document.querySelector(".browseBtn");
        const show = document.querySelector("#viewer");
        const files_listing = document.querySelector("#file_selector");
        const pdf_to_show = document.querySelector("#pdf_to_show");
        pdf_to_show.style.display = "none";

        dropZone.addEventListener("dragover", (e) => {
            e.preventDefault();
            if (!dropZone.classList.contains("dragged")) {
                dropZone.classList.add("dragged");
            }
        })
        dropZone.addEventListener("dragleave", () => {
            dropZone.classList.remove("dragged");
        })
        dropZone.addEventListener("drop", (e) => {
            e.preventDefault(e);
            dropZone.classList.remove("dragged");
            console.log(e.dataTransfer.files.length) //gives number of files
            const files = e.dataTransfer.files;
            console.log(files);
            console.log(files[0].name);
            // const show = document.querySelector("#pdf_to_show embed");
            if (files) {
                file_input.files = files;
                // console.log(show.src);
                pdf_to_show.style.display = "flex";
                show_pdf(files[0]);
                add_fileBtn(file_input.files);
            $('.btns_to_show').css("display","flex");
            }
        })
        browseBtn.addEventListener("click", () => {
            file_input.click();
        })
        file_input.addEventListener("change", (e) => {
            console.log(file_input.files)
            show_pdf(file_input.files[0])
            add_fileBtn(file_input.files)
            pdf_to_show.style.display = "flex";
            $('.btns_to_show').css("display","flex");
        })

        function show_pdf(files) {
            pdffile = files;
            pdffile_url = URL.createObjectURL(pdffile);
            show.src = pdffile_url;

        };

        function add_fileBtn(files) {
            console.log(files.length)
            let data = '';
            for (i = 0; i < files.length; i++) {
                data += "<span class='files_list_span active' id='" + i + "' onclick='show_pdf(file_input.files[" + i + "])'>" + files[i].name + "</span>";
            }
            console.log(files)
            files_listing.innerHTML = data;
        }
    </script>

</body>

</html>